---
{"category_name":"medium","problem_code":"CNTWAYS","problem_name":"The Uncountable Ways","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ballon_ziq","problem_tester":"laycurse","date_added":"12-10-2012","tags":{"0":"ballon_ziq","1":"combinatorics","2":"dec12","3":"easy"},"editorial_url":"http://discuss.codechef.com/problems/CNTWAYS","time":{"view_start_date":1355221033,"submit_start_date":1355221033,"visible_start_date":1355218200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Little Chef loves mathematics.Every day, he solves some mathematical problems to improve his skill.
</p>
<p>
A few days ago, he found a popular problem about turtles. The problem is as follows. Little Chef is given <b>R</b> rectangles, numbered 1 through <b>R</b>. The width and height of the <b>i</b>-th rectangle are <b>N<sub>i</sub></b> and <b>M<sub>i</sub></b> unit respectively. There is a turtle located on the top-left corner of each rectangle. For each rectangle, count the number of ways the turtle can reach the bottom-right corner, if each turtle can only move right or down 1 unit at any time.The turtle is not allowed to move outside the rectangle, but, of course, the turtle can move on the boundary of the rectangle.
</p>
<p>
In less than one second, this problem was solved for all rectangles.He felt that the problem was too easy. This morning, Little Chef wanted more challenges. Thus, for each rectangle <b>i</b>, he cut and removed a rectangle of <b>A<sub>i</sub></b> × <b>B<sub>i</sub></b> unit from the top-right corner. See the following figure for detail.
</p>
<p><img src="http://codechef.com/download/CNTWAYS1.png" width="280" height="85" /></p>
<p>
He could not solve this new version of the problem easily. Help him count the number of ways each turtle can reach the bottom-right corner using the same rule as before.
</p>
<h3>Input</h3>
<p>
The first line of the input contains a single integer <b>R</b>. The description of <b>R</b> rectangles follows. Each description consists of a single line containing four space-separated integers <b>N<sub>i</sub></b>, <b>M<sub>i</sub></b>, <b>A<sub>i</sub></b>, and <b>B<sub>i</sub></b>.
</p>
<h3>Output</h3>
<p>
For each rectangle, output a single line containing the number of ways, modulo 1,000,000,007.
</p>
<h3>Constraints</h3>
<p>
1 ≤ <b>R</b> ≤ 10<br /> 2 ≤ <b>N<sub>i</sub></b>, <b>M<sub>i</sub></b> ≤ 400,000<br />1 ≤ <b>A<sub>i</sub></b> &lt; <b>N<sub>i</sub></b><br />1 ≤ <b>B<sub>i</sub></b> &lt; <b>M<sub>i</sub></b></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
2 2 1 1

<b>Output:</b>
5
</pre><p>
<b>Explanations:</b><br />
In the sample case, there are 5 ways the turtle can reach the bottom right corner as follows:
</p>
<p><img src=" http://codechef.com/download/CNTWAYS2.png" width="211" height="116" /></p>
