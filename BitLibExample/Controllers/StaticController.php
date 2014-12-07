<?php
namespace BitLibExample\Controllers
{
    /**
     * HomeController short summary.
     *
     * HomeController description.
     *
     * @version 1.0
     * @author Jain
     */
    class StaticController extends \Bit0\Web\Controller
    {
        public function Handle(array $params)
        {
            $file = new \Bit0\IO\File(self::RealPath("~/{$this->m_Parameters['Namespace']}/{$params[0]}"));
            $file->DownloadFile(false);
        }
    }
}