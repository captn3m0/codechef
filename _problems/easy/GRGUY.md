---
{"category_name":"easy","problem_code":"GRGUY","problem_name":"Gravity Guy","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":"laycurse","date_added":"1-04-2015","tags":{"0":"aug15","1":"dynamic","2":"greedy","3":"ma5termind","4":"simple"},"editorial_url":"http://discuss.codechef.com/problems/GRGUY","time":{"view_start_date":1439803800,"submit_start_date":1439803800,"visible_start_date":1439803800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG15/mandarin/GRGUY.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG15/russian/GRGUY.pdf">Russian</a>.</h3>


<p>Chef likes to play games a lot. Gravity Guy is one such interesting game.</p>
<p>"<i>Gravity Guy is an arcade side-scrolling game in which the player controls Gravity Guy by tapping the screen to switch gravity. The objective in this game is to run as far as possible while avoiding being trapped by obstacles, falling, or flying off the screen. If hit by obstacles, the game is over.</i>"</p>
<p>Chef is so addicted to this game that each night he dreams of himself being in the game as Gravity Guy. He has two lanes in front of him represented by two strings of equal length named as <b>L<sub>1</sub></b> and <b>L<sub>2</sub></b>. Each of the two lanes consists of some clean blocks represented by <b>'.'</b> and some dirty blocks represented by <b>'#'</b>.</p>
<p>Chef can start running from the beginning of any of the two lanes and cannot step over any dirty block <b>( '#' )</b> encountered during his journey. He has to complete his journey by reaching the end block of any of the two lanes.</p>
<p>Chef can use the following jumps to reach his destination. Considering chef is at <b>x<sup>th</sup></b> block of some lane.</p>
<ul>
<li>He can jump to <b>x+1<sup>th</sup></b> block of the same lane.</li>
<li>He can switch gravity quickly and jump to <b>x<sup>th</sup></b> block of the other lane.</li>
<li>He can switch gravity and jump to <b>x+1<sup>th</sup></b> block of the other lane.</li>
</ul>
<p>You have to tell him whether he can reach his destination or not. If it is possible for him to reach his destination, then Chef is interested in knowing the minimum number of gravity switches required to reach the destination.</p>

<h3>Input</h3>
<p>First line of input contains a single integer <b>T</b> denoting the number of test cases. Each test case consists of <b>2</b> lines. First line of each test case contains a string denoting lane <b>L<sub>1</sub></b>. Second line of each test case contains a string denoting lane <b>L<sub>2</sub></b>.</p>
<h3>Output</h3>
<p>For each test case, print <b>"Yes"</b> (without quotes) in the first line if Chef is able to reach the destination followed by a line containing an integer denoting minimum number of gravity switches required to reach to the destination. Print a single line containing the word <b>"No"</b> (without quotes) otherwise.</p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ |L<sub>1</sub>| ≤ 2 × 10<sup>5</sup></b>, where <b>|S|</b> denotes the length of string <b>S</b></li>
<li><b>|L<sub>1</sub>| = |L<sub>2</sub>|</b></li>
</ul>

<h3>Subtasks</h3>
<p><b>Subtask 1 (25 points)</b></p>
<ul>
<li>Sum of <b>|L<sub>1</sub>|</b> over all test cases in one file it at most <b>200</b>.</li>
<li>Only "Yes"/"No" response will be evaluated.</li>
</ul>
<br>
<p><b>Subtask 2 (25 points)</b></p>
<ul>
<li>Sum of <b>|L<sub>1</sub>|</b> over all test cases in one file it at most <b>200</b>.</li>
</ul>
<br>
<p><b>Subtask 3 (25 points)</b></p>
<ul>
<li>Sum of <b>|L<sub>1</sub>|</b> over all test cases in one file it at most <b>10<sup>6</sup></b>.</li>
<li>Only "Yes"/"No" response will be evaluated.</li>
</ul>
<br>
<p><b>Subtask 4 (25 points)</b></p>
<ul>
<li>Sum of <b>|L<sub>1</sub>|</b> over all test cases in one file it at most <b>10<sup>6</sup></b>.</li>
</ul>


<h3>Example</h3>
<pre><b>Input:</b>
3
#...#
.###.
#.#.#.
.#.#.#
#...
#...

<b>Output:</b>
Yes
2
Yes
5
No
</pre>

<h3>Explanation</h3>
<ul>
<li><b>Test 1:</b> Chef will start his journey from <b>L<sub>2</sub></b>, switch from <b>L<sub>2</sub></b> to <b>L<sub>1</sub></b> and finally land up at last block of <b>L<sub>2</sub></b> by switching from <b>L<sub>1</sub></b> to <b>L<sub>2</sub></b>. Therefore, he requires total 2 gravity switches to reach the destination.</li>
<li><b>Test 3:</b> Chef cannot start his journey as starting block of both the lanes <b>L<sub>1</sub> & L<sub>2</sub></b> are dirty and he cannot step over them.</li>
</ul>
<br>

<p>In Subtask 1 and Subtask 3, only "Yes"/"No" response will be evaluated. Thus, for example, the output</p>
<pre>
Yes
1
Yes
8
No

</pre>
<p>is considered as a correct output for the example input.</p>
