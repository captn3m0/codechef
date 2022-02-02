---
{"category_name":"hard","problem_code":"ALICE","problem_name":"Alice","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":"kingofnumbers","date_added":"20-07-2016","tags":{"0":"alei","1":"constructive","2":"cook73","3":"easy","4":"gcd"},"editorial_url":"http://discuss.codechef.com/problems/ALICE","time":{"view_start_date":1471804200,"submit_start_date":1471804200,"visible_start_date":1471804200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK73/mandarin/ALICE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK73/russian/ALICE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK73/vietnamese/ALICE.pdf">Vietnamese</a> as well.</h3>

<p>
As a cryptologist, after working on numerous cryptographic protocols, Alice is now retired and living happily in Wonderland. However Alice is still obsessed with security, she even invented a new way to set passwords. Given a board of <b>n</b> rows and <b>n</b> columns with unitary size cells, Alice creates a password by drawing exactly <b>n+1</b> lines with vertices of the integer points on the perimeter of the board. </br>
<img src="https://s3.amazonaws.com/codechef_shared/download/upload/tiles.png"></img>
</p>

<p>
One day Alice forgot her CodeChef password! She knew that she had set her password in the secure way. She remembers that no two lines were parallel, and that every cell of the board was cut by at least one of the lines. A cell is cut by a line when there exists a point strictly inside of the cell that belongs to the line.
</p>

<p>
Please help Alice finding one password satisfying the information that she remembered.
</p>

<h3>Input</h3>
<p>The first line of the input contains one integer <b>T</b> the number of test cases.</p>
<p>Each test case is described by a line containing an integer  <b>n</b> representing the size of the board.</p>

<h3>Output</h3>
<p>For each test case print <b>n + 1</b> lines each of them containing four integers <b>x<sub>1</sub> y<sub>1</sub> x<sub>2</sub> y<sub>2</sub></b> with <b>x<sub>1</sub> ≠ x<sub>2</sub></b> and <b>y<sub>1</sub> ≠ y<sub>2</sub></b>, representing a line that goes from <b>(x<sub>1</sub>,y<sub>1</sub>)</b> to <b>(x<sub>2</sub>,y<sub>2</sub>)</b>. </p>
<p>If there are multiple passwords that satisfies the information, print any of them.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b> </li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>10<sup>3</sup></b> </li>
</ul>

<h3>Example</h3>
<pre><tt><b>Input:</b>
1
3
</tt>
<b>Output:</b>
<tt>0 0 3 2
3 0 0 2
0 1 2 3
0 3 3 2
</tt></pre>

<h3>Explanation</h3>
<p>One of the possible passwords is depicted in the above figure.</p>
<p>Every cell is cut by at least one line, for example the green cell is cut by the blue and purple lines, but not by the yellow one. The integer points on the perimeter of the board are drawn as small black circles.</p>