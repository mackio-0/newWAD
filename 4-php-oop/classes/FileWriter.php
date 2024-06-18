<?php

class FileWriter
{

    private $filename;
    private $handle;

    public function __construct(string $filename)
    {
        $this->filename = $filename;

        // Open the file for writing with error handling
        $this->handle = fopen($this->filename, 'a+') or die("Could not open file: $filename");
    }

    public function write(string $data)
    {
        fwrite($this->handle, $data);
    }

    public function __destruct()
    {
        // Close the file handle if it's open
        if (is_resource($this->handle)) {
            fclose($this->handle);
        }
    }
}
