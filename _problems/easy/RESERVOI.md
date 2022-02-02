---
{"category_name":"easy","problem_code":"RESERVOI","problem_name":"Reservior","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"3-01-2017","tags":{"0":"ad","1":"admin2","2":"jan17","3":"simple"},"editorial_url":"https://discuss.codechef.com/problems/RESERVOI","time":{"view_start_date":1484731800,"submit_start_date":1484731800,"visible_start_date":1484731800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/mandarin/RESERVOI.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/russian/RESERVOI.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/vietnamese/RESERVOI.pdf">Vietnamese</a> as well.</h3>

<p>You are given a structure of a water reservoir. The reservoir is a 2 dimensional structure of height <b>N</b> and width <b>M</b>. It can be thought of divided into <b>M</b> vertical sections, each of equal width. The reservoir height is of <b>N</b> blocks. Each block of the reservoir can contain either water, brick or air. We will denote the water by character 'W', brick by 'B' and air by 'A'.</p>

<p>
You are given representation of reservoir at a fixed instant. Can you tell whether the current state of reservoir is stable, i.e. it will remain on the same state forever or not?
</p>

<p>
For example, let the reservoir be 

<pre>
WW
BB
</pre>

This is not stable, as the water in the block (1, 1) can overflow to the left, similarly water in block (1, 2) can overflow to the right too.
</p>

<p>
<pre>
BWB
BBB
</pre>

This is stable, as the water at block (1, 2) is entrapped between bricks from all sides.
</p>

<p>
<pre>
AWA
BBB
</pre>

This is not stable, as the water at block (1, 2) might overflow to the left or the right.
</p>

<p>
<pre>
BAA
ABB
</pre>

This is not stable, as there is a brick at block (1, 1) and air at (2, 1). The brick will go down and air will come up, so its not stable too.
</p>

<p>
<pre>
BWAAB
BWBWB
BBBBB
</pre>

This is not stable too, as there is water at block (1, 2) and air at (1, 3), and (1, 4). The water will move towards those blocks.
</p>


<p>
<pre>
BBB
BAB
BBB
</pre>

So brick at (1, 2) is loose and without support, and hence will fill the space beneath it, which is right now filled with air. That is, the brick will go down and replace the air
</p>

<p>
<pre>
BBB
BWB
BBB
</pre>

This is also unstable due to the same reason as the above.
</p>

<p>Now, you are given description of reservoir. Can you tell whether the current state of reservoir is stable or not?</p>

<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b> denoting number of test cases. Description of <b>T</b> test cases follows.</p>
<p>The first line of each test case, contains two integers <b>N</b> and <b>M</b> denoting the height and width of reservoir, respectively.</p>
<p>Each of the next <b>N</b> lines a string of length <b>M</b>. The <b>j</b>-th character in the <b>i</b>-th of the line denotes content at block <b>(i, j)</b>. The characters can be 'B' denoting brick, 'A' denoting air, 'W' denoting water.</p>

<h3>Output</h3>
<p>For each test case, output a line containing "yes" or "no" (without quotes) corresponding to the situation whether the reservoir is stable or not?</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>50</b></li>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>1000</b></li>
</ul>

<p>
<b>Subtask #1: (15 points)</b>
<ul>
<li>There is no water in the reservoir.</li>
</ul>
</p>

<p>
<b>Subtask #2: (25 points)</b>
<ul>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>100</b></li>
</ul>
</p>

<b>Subtask #3: (60 points)</b>
<ul>
<li><b>original constraints</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
7
2 2
WW
BB
2 3
BWB
BBB
2 3
AWA
BBB
2 3
BAA
ABB
3 5
BWAAB
BWBWB
BBBBB
3 3
BBB
BAB
BBB
BBB
BWB
BBB

<b>Output:</b>
no
yes
no
no
no
no
no
</pre>

<h3>Explanation</h3>
<p>All the examples are explained in the problem statement itself.</p>