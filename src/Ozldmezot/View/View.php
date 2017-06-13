<?php namespace Ozldmezot\View;

class View {

    public $extension;
    public $path;

	public function __construct(string $path = 'views', string $extension = '.php') {
		$this->extension = $extension;
		$this->path       = $path;
	}

    public function fetch(string $file, array $data = []) : string {
        ob_start();

        extract($data);
        include $this->path.'/'.$file . $this->extension;
        $output = ob_get_clean();

        return $output;
    }
}
