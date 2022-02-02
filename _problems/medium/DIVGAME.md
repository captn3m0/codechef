---
{"category_name":"medium","problem_code":"DIVGAME","problem_name":"Game of Divisors","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"gerald","date_added":"8-02-2014","tags":{"0":"cook44","1":"easy","2":"game","3":"kostya_by"},"editorial_url":"http://discuss.codechef.com/problems/DIVGAME","time":{"view_start_date":1395599400,"submit_start_date":1395599400,"visible_start_date":1395599400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK44/mandarin/DIVGAME.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK44/russian/DIVGAME.pdf">Russian</a> as well.</h3>
<p>
Mike and his friend Tom are playing a very interesting game right now. Here is the description of the game:
</p>
<p><ul type="square">
<li>Initially, there is a positive integer <b>N</b> written on the desk, which is strictly greater than 1;
</li><li>Mike makes the first move, then players make moves alternatively;
</li><li>On each move the current player can either decrease the number on the desk by 1, or divide it by one of it's divisors except itself and 1; It's forbidden to decrease the number if it's equal to 1;
</li><li>If the current player can't make a move, then he loses. In other words, if there is "1" written on the desk right before his move, then he loses.
	</li></ul>
</p>
<p>
You are given a number <b>N</b>. You need to determine the winner of the game, if <b>N</b> is the number written of the desk initially. You may assume, that both players play optimally.
</p>
<h3>Input</h3>

<p>
There are multiple test cases in the input. The first line of the input contains one integer <b>T</b>, denoting the number of test cases in the input.
</p>
<p>The next <b>T</b> lines contain one integer each, denoting the initial number of the game.</p>
<p>All the test cases are independent and must be considered separately!</p>
<p> </p>
<h3>Output</h3>
<p>Your output should contain exactly <b>T</b> lines, each contains the name of the winner(Mike or Tom) of the corresponding game. You should output the verdicts of the games in the order they appear in the input.</p>
<p> </p>
<h3>Constraints</h3>
<p>1 ≤ <b>T</b> ≤ 10 000;</p>
<p>2 ≤ <b>N</b> ≤ 10<sup>8</sup>, for each test case appeared in the input.</p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4 
5 
3 
2 
4

<b>Output:</b>
Tom
Tom
Mike
Mike
</pre>
