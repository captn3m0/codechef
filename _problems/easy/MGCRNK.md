---
{"category_name":"easy","problem_code":"MGCRNK","problem_name":"Magic Rankings","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kuruma","problem_tester":"laycurse","date_added":"19-09-2012","tags":{"0":"dec12","1":"dpmgc","2":"kuruma","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/MGCRNK","time":{"view_start_date":1355220998,"submit_start_date":1355220998,"visible_start_date":1355218200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Everybody loves magic, especially magicians who compete for glory on the Byteland Magic Tournament. Magician Cyael is one such magician.</p>
<p>Cyael has been having some issues with her last performances and today she’ll have to perform for an audience of some judges, who will change her tournament ranking, possibly increasing it. As she is a great magician she managed to gather a description of the fixed judges’ disposition on the room (which is represented as an <b>N</b> × <b>N</b> square matrix), such that she knows in advance the fixed points each judge will provide. She also knows that the room is divided into several parallel corridors, such that we will denote the <b>j</b>-th cell on corridor <b>i</b>, as <b>[i][j]</b>. Note that some judges can award Cyael, zero points or negative points, as they are never pleased with her performance.</p>
<p>There is just one judge at each cell of the matrix, except the cells <b>[1][1]</b> and <b>[N][N]</b>.</p>
<p>To complete her evaluation, she must start on the top leftmost corner of the room (cell <b>[1][1]</b>), and finish on the bottom right corner (cell <b>[N][N]</b>), moving either to the cell directly in front of her on the same corridor (that is, moving from cell <b>[r][c]</b> to cell <b>[r][c+1]</b>, where <b>c+1</b> ≤ <b>N</b>) or to the cell in the next corridor directly in front of where she is (that is, moving from cell <b>[r][c]</b> to cell <b>[r+1][c]</b>, where <b>r+1</b> ≤ <b>N</b>). She will keep doing this until she reaches the end point of the room, i.e. last cell <b>[N][N]</b> on the last corridor. Cyael will be judged at all visited cells with a judge.</p>
<p>
Cyael wants to maximize her average score at end of her performance. More specifically, if she passes <b>K</b> judges, each being on cell <b>[i<sub>1</sub>][j<sub>1</sub>]</b>, cell <b>[i<sub>2</sub>][j<sub>2</sub>]</b>, ..., cell <b>[i<sub>K</sub>][j<sub>K</sub>]</b> respectively, then she wants to maximize (<b>S[i<sub>1</sub>][j<sub>1</sub>]</b> + <b>S[i<sub>2</sub>][j<sub>2</sub>]</b> + ... + <b>S[i<sub>K</sub>][j<sub>K</sub>]</b>) / <b>K</b>, where <b>S[i][j]</b> denotes the points that the judge will give her on the cell <b>[i][j]</b>.</p>
<p>Help her determine the best path she has to follow in order to maximize her average points.</p>
<h3>Input</h3>
<p>The first line contains a single integer <b>T</b> denoting the number of test cases. The description for <b>T</b> test cases follows. For each test case, the first line contains a single integer <b>N</b>. Each of the next <b>N</b> lines contains <b>N</b> space-separated integers.<br />
The j-th integer <b>S[i][j]</b> in i-th line denotes the points awarded by the judge at cell <b>[i][j]</b>.<br />
Note that the cells <b>[1][1]</b> and <b>[N][N]</b> have no judges, so <b>S[1][1]</b> and <b>S[N][N]</b> will be 0.</p>
<h3>Output</h3>
<p>For each test case, if the maximum possible average points Cyael can obtain is negative, output a single line containing "Bad Judges" (quotes for clarity). Otherwise, output the maximum possible average points. The answer will be considered correct if it has an absolute error no more than  <b>10<sup>-6</sup></b>.</p>
<h3>Constraints</h3>
<p>1 ≤ <b>T</b> ≤ 20<br />2 ≤ <b>N</b> ≤ 100<br />-2500 ≤ <b>S[i][j]</b> ≤ 2500<br /><b>S[1][1]</b> = <b>S[N][N]</b> = 0<br /></p>
<p>Your code will be judged against several input files. </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
2
0 -4
8 0
2
0 -45
-3  0


<b>Output:</b>
8.000000
Bad Judges
</pre>