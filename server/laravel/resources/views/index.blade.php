<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>サンプル一覧画面</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<noscript>
  <strong>サンプル一覧画面</strong>
</noscript>
<div id="app">
  <div>
    <header class="d-flex align-items-center justify-content-between
   bg-white border-bottom px-3 py-2" style="height: 61px;">
      <div id="title">サンプル一覧画面</div>
      <div id="dropdown-menu-aria" class="dropdown">
        <button id="dropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                class="btn btn-link p-0">
          <svg width="2.25em" height="2.25em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
               class="bi bi-people-circle">
            <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757
           1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z"></path>
            <path fill-rule="evenodd" d="M8 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
            <path fill-rule="evenodd" d="M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8
           0 1116 0A8 8 0 010 8z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
    </header>
  </div>
  <div>
    <main class="container-fluid px-5 pt-3 pb-5">
      <div id="number-processing" class="d-flex mb-3">
        <div id="number-of-processing"><strong>サンプル一覧</strong></div>
      </div>
      <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">名前</th>
          <th scope="col">性別</th>
          <th scope="col">生年月日</th>
          <th scope="col">結果</th>
          <th scope="col" style="width: 90px;"></th>
          <th scope="col" style="width: 90px;"></th>
          <th scope="col" style="width: 50px;"></th>
        </tr>
        </thead>
        <tbody>
        <div>
          <tr>
            <th>1</th>
            <td>堀北真希</td>
            <td>女</td>
            <td>19881006</td>
            <td>処理待ち</td>
            <form action="/list" method="post">
              <td class="align-middle py-0">
                <input type="hidden" name="id" value="1">
                <input type="hidden" name="result" value="OK">
                <button class="btn btn-outline-primary btn-block text-decoration-none" type="submit">OK</button>
              </td>
            </form>
            <form action="/list" method="post">
              <td class="align-middle py-0">
                <input type="hidden" name="id" value="1">
                <input type="hidden" name="result" value="NG">
                <button class="btn btn-outline-primary btn-block text-decoration-none" type="submit">NG</button>
              </td>
            </form>
            <td class="align-middle py-0">
              <a href="#"
                 class="btn btn-outline-primary btn-block text-decoration-none">
                <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                     class="bi bi-download">
                  <path fill-rule="evenodd"
                        d="M.5 8a.5.5 0 01.5.5V12a1 1 0 001 1h12a1 1 0 001-1V8.5a.5.5 0 011 0V12a2 2 0 01-2 2H2a2 2 0 01-2-2V8.5A.5.5 0 01.5 8z"
                        clip-rule="evenodd"></path>
                  <path fill-rule="evenodd"
                        d="M5 7.5a.5.5 0 01.707 0L8 9.793 10.293 7.5a.5.5 0 11.707.707l-2.646 2.647a.5.5 0 01-.708 0L5 8.207A.5.5 0 015 7.5z"
                        clip-rule="evenodd"></path>
                  <path fill-rule="evenodd"
                        d="M8 1a.5.5 0 01.5.5v8a.5.5 0 01-1 0v-8A.5.5 0 018 1z"
                        clip-rule="evenodd"></path>
                </svg>
              </a>
            </td>
          </tr>
        </div>
        <div>
          <tr>
            <th>2</th>
            <td>木村佳乃</td>
            <td>女</td>
            <td>19760410</td>
            <td>処理待ち</td>
            <form action="/list" method="post">
              <td class="align-middle py-0">
                <input type="hidden" name="id" value="2">
                <input type="hidden" name="result" value="OK">
                <button class="btn btn-outline-primary btn-block text-decoration-none" type="submit">OK</button>
              </td>
            </form>
            <form action="/list" method="post">
              <td class="align-middle py-0">
                <input type="hidden" name="id" value="2">
                <input type="hidden" name="result" value="NG">
                <button class="btn btn-outline-primary btn-block text-decoration-none" type="submit">NG</button>
              </td>
            </form>
            <td class="align-middle py-0">
              <a href="#"
                 class="btn btn-outline-primary btn-block text-decoration-none">
                <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                     class="bi bi-download">
                  <path fill-rule="evenodd"
                        d="M.5 8a.5.5 0 01.5.5V12a1 1 0 001 1h12a1 1 0 001-1V8.5a.5.5 0 011 0V12a2 2 0 01-2 2H2a2 2 0 01-2-2V8.5A.5.5 0 01.5 8z"
                        clip-rule="evenodd"></path>
                  <path fill-rule="evenodd"
                        d="M5 7.5a.5.5 0 01.707 0L8 9.793 10.293 7.5a.5.5 0 11.707.707l-2.646 2.647a.5.5 0 01-.708 0L5 8.207A.5.5 0 015 7.5z"
                        clip-rule="evenodd"></path>
                  <path fill-rule="evenodd"
                        d="M8 1a.5.5 0 01.5.5v8a.5.5 0 01-1 0v-8A.5.5 0 018 1z"
                        clip-rule="evenodd"></path>
                </svg>
              </a>
            </td>
          </tr>
        </div>
        <div>
          <tr>
            <th>3</th>
            <td>水樹奈々</td>
            <td>女</td>
            <td>19800121</td>
            <td>処理待ち</td>
            <form action="/list" method="post">
              <td class="align-middle py-0">
                <input type="hidden" name="id" value="3">
                <input type="hidden" name="result" value="OK">
                <button class="btn btn-outline-primary btn-block text-decoration-none" type="submit">OK</button>
              </td>
            </form>
            <form action="/list" method="post">
              <td class="align-middle py-0">
                <input type="hidden" name="id" value="3">
                <input type="hidden" name="result" value="NG">
                <button class="btn btn-outline-primary btn-block text-decoration-none" type="submit">NG</button>
              </td>
            </form>
            <td class="align-middle py-0">
              <a href="#"
                 class="btn btn-outline-primary btn-block text-decoration-none">
                <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                     class="bi bi-download">
                  <path fill-rule="evenodd"
                        d="M.5 8a.5.5 0 01.5.5V12a1 1 0 001 1h12a1 1 0 001-1V8.5a.5.5 0 011 0V12a2 2 0 01-2 2H2a2 2 0 01-2-2V8.5A.5.5 0 01.5 8z"
                        clip-rule="evenodd"></path>
                  <path fill-rule="evenodd"
                        d="M5 7.5a.5.5 0 01.707 0L8 9.793 10.293 7.5a.5.5 0 11.707.707l-2.646 2.647a.5.5 0 01-.708 0L5 8.207A.5.5 0 015 7.5z"
                        clip-rule="evenodd"></path>
                  <path fill-rule="evenodd"
                        d="M8 1a.5.5 0 01.5.5v8a.5.5 0 01-1 0v-8A.5.5 0 018 1z"
                        clip-rule="evenodd"></path>
                </svg>
              </a>
            </td>
          </tr>
        </div>
        <div>
          <tr>
            <th>4</th>
            <td>阿部寛</td>
            <td>男</td>
            <td>19640622</td>
            <td>合格</td>
            <form action="/list" method="post">
              <td class="align-middle py-0">
                <input type="hidden" name="id" value="4">
                <input type="hidden" name="result" value="OK">
                <button class="btn btn-outline-primary btn-block text-decoration-none" type="submit">OK</button>
              </td>
            </form>
            <form action="/list" method="post">
              <td class="align-middle py-0">
                <input type="hidden" name="id" value="4">
                <input type="hidden" name="result" value="NG">
                <button class="btn btn-outline-primary btn-block text-decoration-none" type="submit">NG</button>
              </td>
            </form>
            <td class="align-middle py-0">
              <a href="#"
                 class="btn btn-outline-primary btn-block text-decoration-none">
                <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                     class="bi bi-download">
                  <path fill-rule="evenodd"
                        d="M.5 8a.5.5 0 01.5.5V12a1 1 0 001 1h12a1 1 0 001-1V8.5a.5.5 0 011 0V12a2 2 0 01-2 2H2a2 2 0 01-2-2V8.5A.5.5 0 01.5 8z"
                        clip-rule="evenodd"></path>
                  <path fill-rule="evenodd"
                        d="M5 7.5a.5.5 0 01.707 0L8 9.793 10.293 7.5a.5.5 0 11.707.707l-2.646 2.647a.5.5 0 01-.708 0L5 8.207A.5.5 0 015 7.5z"
                        clip-rule="evenodd"></path>
                  <path fill-rule="evenodd"
                        d="M8 1a.5.5 0 01.5.5v8a.5.5 0 01-1 0v-8A.5.5 0 018 1z"
                        clip-rule="evenodd"></path>
                </svg>
              </a>
            </td>
          </tr>
        </div>
        </tbody>
      </table>
    </main>
  </div>
</div>
</body>
</html>
