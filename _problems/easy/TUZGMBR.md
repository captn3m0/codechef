---
{"category_name":"easy","problem_code":"TUZGMBR","problem_name":"Puppy and Board","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pavel1996","problem_tester":"kostya_by","date_added":"10-02-2016","tags":{"0":"cook67","1":"dynamic","2":"easy","3":"game","4":"pavel1996"},"editorial_url":"http://discuss.codechef.com/problems/TUZGMBR","time":{"view_start_date":1456081200,"submit_start_date":1456081200,"visible_start_date":1456081200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK67/mandarin/TUZGMBR.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK67/russian/TUZGMBR.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK67/vietnamese/TUZGMBR.pdf">Vietnamese</a> as well.</h3>


<p>Tuzik and Vanya are playing the following game.</p>
<p>They have an <b>N × M</b> board and a chip to indicate the current game position. The chip can be placed on any one cell of the game board, each of which is uniquely identified by an ordered pair of positive integers <b>(r, c)</b>, where <b>1 ≤ r ≤ N</b> is the row number and <b>1 ≤ c ≤ M</b> is the column number.</p>
<p>Initially, the chip is placed at the cell identified as <b>(1, 1)</b>. For his move, a player can move it either <b>1, 2 or 3</b> cells up, or <b>1 or 2</b> cells to the right. The player who can not move the chip loses. In other words, a player suffers defeat if the chip is placed in the cell <b>(N, M)</b> at the start of his turn.</p>
<p>Tuzik starts the game. You have to determine who will win the game if both players play optimally.</p>

<h3>Input</h3>
<p>The first line contains an integer <b>T</b> denoting the number of tests. Each of the following <b>T</b> lines contain two integers <b>N</b> and <b>M</b>.</p>

<h3>Output</h3>
<p>For each test output "Tuzik" or "Vanya" on a separate line, indicating who will win the game.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>10<sup>6</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
4 4
2 2

<b>Output:</b>
Tuzik
Vanya

</pre>
 <p></p>
<h3>Explanation</h3>

<b>Test case 1:</b> On his first turn Tuzik moves chip 3 cells up to the cell <b>(4, 1)</b>. On his turn Vanya can move chip only right to the cell <b>(4, 2)</b> or to the cell <b>(4, 3)</b> and after that Tuzik moves it to <b>(4, 4)</b> and finishes the game.
<br>
<b>Test case 2:</b> On his first Turn Tuzik can move chip to the cell <b>(2, 1)</b> or <b>(1, 2)</b>, but on his next turn Vanya moves it to <b>(2, 2)</b> and wins the game.