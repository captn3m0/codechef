---
{"category_name":"challenge","problem_code":"MINESWPR","problem_name":"Minesweeper","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pieguy","problem_tester":"anton_lunyov","date_added":"13-02-2013","tags":{"0":"ad","1":"bfs","2":"challenge","3":"interactive","4":"march13","5":"pieguy"},"editorial_url":"http://discuss.codechef.com/problems/MINESWPR","time":{"view_start_date":1363000559,"submit_start_date":1363000559,"visible_start_date":1363000281,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Note: This is an interactive problem.  Interactive problems differ from classic problems in that your solution will send and receive data from a special judge program instead of from static files.  Pay special attention to the notice on output buffering described in the "Input + Output" section below.</p>
<p>An <b>N &times; N</b> field contains many mines.  Each mine occupies some cell of the field. Each cell could contain at most one mine. There are <b>M</b> mines in all at the field. You need to neutralize all of the mines so it will be safe to pass through.  The mines are neutralized with dynamite.  A single piece of dynamite can be used to neutralize a single cell. You have only <b>K</b> pieces of dynamite. But don't worry, it is guaranteed that <b>K &ge; M</b>.</p>
<p>You may perform two operations:
<ul>
<li><b>N</b>eutralize - neutralize the mine in the specified cell, if one exists.  Otherwise has no effect.  This operation may be performed at most <b>K</b> times.</li>
<li><b>S</b>urvey - check a cell for a mine, and if it doesn't have a mine count the number of cells adjacent to it containing mines.  Previously neutralized mines are not counted.  Each cell is adjacent to up to 8 other cells (2 horizontally, 2 vertically, and 4 diagonally).  This operation may be performed at most <b>N</b><sup>2</sup> times. But you could survey the same cell twice if necessary and also it is allowed to survey the cell after neutralize operation was applied to it.</li>
</ul>
</p>
<p>Surveying is very dangerous, so you need to try to minimize the number of survey operations you perform.  Submissions that use fewer survey operations will score more points.</p>
<h3>Input + Output</h3>
<p>Input begins with the line containing 3 space separated integers <b>N</b>, <b>M</b>, and <b>K</b>, the size of the field, the number of mines, and the number of pieces of dynamite, respectively. The locations of mines are predetermined but currently unknown to you.</p>
<p>To perform a neutralize operation, print a line containing "N x y" (without quotes), where <b>x</b> and <b>y</b> are the coordinates of the cell you wish to neutralize (0 &le; <b>x</b>, <b>y</b> &lt; <b>N</b>).</p>
<p>To perform a survey operation, print "S x y" (without quotes), where <b>x</b> and <b>y</b> are the coordinates of the cell you wish to check (0 &le; <b>x</b>, <b>y</b> &lt; <b>N</b>).  Then read a line containing a single character.  This character will be 'M' if the cell contains a mine, otherwise it will be an integer between 0 and 8, indicating the number of cells adjacent to the specified cell that contain mines.</p>
<p>When you are finished, print "Done" (without quotes).</p>
<p>Note that you will receive Wrong Answer verdict if one of the following happens:
<ul>
<li>You will perform more than <b>N<sup>2<sup></sup></sup></b> survey operations.</li>
<li>You will perform more than <b>K</b> neutralize operations.</li>
<li>You will output operation in wrong format.<br/> In particular, <b>x</b> and <b>y</b> should be between <b>0</b> and <b>N &minus; 1</b>, inclusive.</br/></li>
<li>You will output "Done" but not all mines are neutralized.</li>
</ul>
</p>
<p><i>Attention: the program should clear the output buffer after printing each line. It can be done using fflush(stdout) command or by setting the proper type of buffering at the beginning of the execution - setlinebuf(stdout).  Failure to flush the output buffer will result in Time Limit Exceeded verdict.</i><br/> For example, at C/C++ you could use the following routines:</br/></p>
<pre><code>char Survey(int x, int y) {
    printf("S %d %d\n", x, y);
    fflush(stdout);
    char res;
    scanf(" %c", &res);
    return res;
}

void Neutralize(int x, int y) {
    printf("N %d %d\n", x, y);
    fflush(stdout); /* but it is not necessary here */
}
</code></pre><h3>Scoring</h3>
<p>Suppose you successfully neutralized all mines using <b>S</b> survey operations.<br/> Then your score is <b>10 * (S + 1) / N<sup>2</sup></b>. Lower scores will earn more points.</br/></p>
<h3>Sample Input + Output</h3>
<pre><code>In:  4 2 3
Out: S 0 0
In:  0
Out: S 2 3
In:  2
Out: S 1 2
In:  M
Out: N 1 2
Out: S 2 3
In:  1
Out: S 3 2
In:  1
Out: N 2 2
Out: N 3 3
Out: Done
</code></pre><h3>Explanation</h3>
<p>The mines are located at (1, 2) and (3, 3).  The operations proceed as follows:
<ul>
<li>Survey (0, 0).  This cell does not contain a mine, nor do any of its 3 neighbors ((0, 1), (1, 0) and (1, 1)), so the result is "0".</li>
<li>Survey (2, 3).  This cell does not contain a mine, but 2 of its 5 neighbors contain mines, so the result is "2".</li>
<li>Survey (1, 2).  This cell contains a mine.  The survey result is "M".</li>
<li>Neutralize (1, 2).  Destroy the mine in the cell (1, 2).</li>
<li>Survey (2, 3).  This cell was surveyed before, however the mine in (1, 2) has now been neutralized, so only one mine remains and the result is "1".</li>
<li>Survey (3, 2).  This cell is adjacent to the remaining mine.</li>
<li>Neutralize (2, 2).  This cell does not contain a mine, but we have a spare piece of dynamite so it's okay to neutralize this cell unnecessarily.</li>
<li>Neutralize (3, 3).  Destroy the last mine in the cell (3, 3).</li>
<li>Done. All of the mines have now been neutralized.</li>
</ul>
</p><p>Note that the above sequence of operations is also consistent with the mines having been located at (1, 2) and (2, 2).  This sample performs 5 survey operations, and therefore would score <b>10 * (5 + 1) / 4<sup>2</sup> = 3.75</b>.</p>
<h3>Test Case Generation</h3>
<p><b>N</b> is chosen randomly and uniformly between 30 and 50, inclusive.  A real number <b>P</b> is chosen randomly and uniformly between 0.1 and 0.3, inclusive.  Each cell is independently chosen to contain a mine with probability <b>P</b>.  Then <b>M</b> is set to be the number of mines on the generated field.  With 50% probability, <b>K</b> is chosen to be equal to <b>M</b>.  Otherwise, <b>K</b> is chosen randomly and uniformly between <b>M</b> and <b>N</b><sup>2</sup>/2, inclusive.</p>
<p><i>Note: The locations of the mines are not guaranteed to be the same across multiple submissions, however <b>N</b>, <b>M</b>, and <b>K</b> will be the same for each official input file across all submissions.</i></p>
