---
{"category_name":"easy","problem_code":"CHEFIHG","problem_name":"Chef and Land","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"karanaggarwal","date_added":"10-07-2016","tags":{"0":"bfs","1":"cook72","2":"easy","3":"graph","4":"mgch"},"editorial_url":"http://discuss.codechef.com/problems/CHEFIHG","time":{"view_start_date":1469385000,"submit_start_date":1469385000,"visible_start_date":1469385000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK72/mandarin/CHEFIHG.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK72/russian/CHEFIHG.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK72/vietnamese/CHEFIHG.pdf">Vietnamese</a> as well.</h3>
<p>
Chef lives in Chefland. Chefland can be thought as a two-dimensional grid of dimensions <b>N</b>x<b>M</b>. Some of the cells of the Chefland are prohibited to visit (denoted by '*'). One can never step on such prohibited cells. There is a city at each at each non-prohibited cell (will be denoted by '.' or 'C' (denoting capital city)).
</p>
<p>
Sadly people in the capital city of Chefland (denoted by 'C') are lazy for their shopping. So they invented a robot for carrying their groceries. They want to feed a command of at max <b>10<sup>5</sup></b> characters to the robot such that if the robot starts from any cell (non-prohibited) of the grid, it should be able to visit the capital city during its walk. Each character of the command will be one of 'U', 'D', 'L', 'R' denoting the movement to go up, down, left and right cell from the current cell (provided it exists and the cell is not prohibited to visit). Otherwise, the robot will just stay at its current cell. The characters of the command will be followed in the order from left to right.
</p>
<p>
Now, after thinking a lot, citizens of Chefland could not come up such a command to feed to robot. So, they ask your help in it. They have come to know from an oracle that it is guaranteed that such a command exists.
</p>
<h3>Input</h3>
<p>First line contains two space separated integers <b>N</b>, <b>M</b>, denoting the dimensions of the grid.</p>
<p>Each of next <b>N</b> lines contains <b>M</b> symbols denoting the map of Chefland.</p>
<h3>Output</h3>
<p>Output one non-empty string corresponding to the command with length ≤ <b>10<sup>5</sup></b> containing only symbols 'U', 'L', 'D', 'R'.  it's guaranteed that such pattern exists. </p>
<h3>Constraints</h3>
<ul>
<li>4 ≤ <b>N, M</b> ≤ 20</li>
<li>Each cell can be one of three types: 'C', '.', '*'.</li>
<li>All border cells are '*'.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>
4 4
****
*.C*
*..*
****
</tt>
<b>Output:</b>
LDUR
</pre>
<pre><b>Input:</b>
<tt>5 6
******
*.C..*
**.***
*....*
******</tt>

<b>Output:</b>
RLLURUU
</pre><h3>Explanation</h3>
<p>You can reach to capital city by feeding this command to robot starting from any city. We have shown one such application of the command for the city on the cell (2, 2).</p>
<p>
From cell (2, 2), you can go to following cells in order when you apply the command.</p>
<ul>
<li>Start at (2, 2).</li>
<li>Apply the command 'L'. The cell at the left (2, 1) is prohibited, so you stay at (2, 2).</li>
<li>Apply the command 'D'. You go to cell (3, 2).</li>
<li>Apply the command 'U'. You come back to cell (2, 2).</li>
<li>Apply the command 'R'. You come back to cell (2, 3), i.e. the capital city.</li>
</ul>

