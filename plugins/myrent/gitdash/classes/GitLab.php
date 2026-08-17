<?php namespace myrent\GitDash\Classes;

class GitLab
{
    public static function triggerPipeline(string $project, string $triggerToken, string $ref, array $vars = [])
    {
        $url = 'https://gitlab.com/api/v4/projects/'.rawurlencode($project).'/trigger/pipeline';
        $data = ['token' => $triggerToken, 'ref' => $ref];
        foreach ($vars as $k => $v) {
            $data["variables[$k]"] = $v;
        }
        $fields = http_build_query($data);

        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => $fields,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT        => 20,
            CURLOPT_HTTPHEADER     => ['Accept: application/json'],
        ]);
        $res  = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        $json = @json_decode($res, true);
        if ($code >= 200 && $code < 300) {
            return [
                'ok'  => true,
                'id'  => $json['id'] ?? null,
                'url' => 'https://gitlab.com/'.$project.'/-/pipelines/'.($json['id'] ?? ''),
            ];
        }
        return ['ok' => false, 'error' => $res ?: ('HTTP '.$code)];
    }
}
