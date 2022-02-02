---
{"category_name":"hard","problem_code":"MAXCIR","problem_name":"Max Circumference","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"cgy4ever","problem_tester":"anton_lunyov","date_added":"10-09-2012","tags":{"0":"cgy4ever","1":"hard","2":"oct12"},"editorial_url":"http://discuss.codechef.com/problems/MAXCIR","time":{"view_start_date":1350293400,"submit_start_date":1350293400,"visible_start_date":1350293400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p style="text-align:justify">
In the magic land there is a triangle <b>ABC</b>.
</p>
<p style="text-align:justify">
You have <b>N</b> spell cards. Each card has two parameters, <b>i</b>-th card has parameters <b>x[i]</b> and <b>y[i]</b>. Using of the <b>i</b>-th spell card add <b>x[i]</b> to the <b>x</b>-coordinate of the point <b>A</b> and add <b>y[i]</b> to the <b>y</b>-coordinate of the point <b>A</b>. So if <b>A</b> has coordinates <b>(X, Y)</b> it will be moving to <b>(X + x[i], Y + y[i])</b> by using this card.
</p>
<p style="text-align:justify">
You can use at most <b>K</b> spell cards. Applying of several spell cards performs consecutively. So if <b>A</b> was moved to some point <b>A'</b> by the first spell card then second spell card is applied to the new position of <b>A</b>, that is, to the point <b>A'</b>, and so on for further cards.
</p>
<p style="text-align:justify">
Your task is to find the maximal possible circumference of the triangle <b>ABC</b> after using of at most <b>K</b> spell cards (note that you can use no spell cards). The circumference of a triangle <b>ABC</b> is the sum of its side lengths: <b>|AB| + |BC| + |CA|</b>. And in our problem by triangle we mean any three points <b>A</b>, <b>B</b>, <b>C</b> of the plane. So, in particular, the points <b>A</b>, <b>B</b>, <b>C</b> can lie on the same line, or even some of them can coincide.
</p>
<h3>Input</h3>
<p style="text-align:justify">
The first line of the input contains two integers <b>N</b> and <b>K</b>.<br /><br />
The second line contains two integers <b>Ax</b> and <b>Ay</b>, the coordinates of the point <b>A</b>.<br /><br />
The third line contains two integers <b>Bx</b> and <b>By</b>, the coordinates of the point <b>B</b>.<br /><br />
The fourth line contains two integers <b>Cx</b> and <b>Cy</b>, the coordinates of the point <b>C</b>.<br /><br />
Each of the following <b>N</b> lines contains two integers <b>x[i]</b> and <b>y[i]</b>, the parameters of the <b>i</b>-th spell card.
</p>
<h3>Output</h3>
<p style="text-align:justify">
Output should contain a single real number rounded to exactly <b>13</b> digits after the decimal point, the maximal possible circumference of the triangle <b>ABC</b> that can be achieved by using at most <b>K</b> spell cards. Your answer will be considered as correct if it has an absolute error less than <b>10<sup>-12</sup></b>.
</p>
<h3>Constraints</h3>
<p style="text-align:justify">
<b>1</b> &le; <b>N</b> &le; <b>500</b><br /><br />
<b>0</b> &le; <b>K</b> &le; <b>N</b><br /><br />
|<b>Ax</b>|, |<b>Ay</b>|, |<b>Bx</b>|, |<b>By</b>|, |<b>Cx</b>|, |<b>Cy</b>| &le; <b>10<sup>9</sup></b><br /><br />
|<b>x</b>[<b>i</b>]|, |<b>y</b>[<b>i</b>]| &le; <b>10<sup>6</sup></b><br />
</p>
<h3>Example</h3>
<pre>
<b>Input 1:</b>
3 2
0 0
1 0
-1 0
0 1
1 0
1 1

<b>Output 1:</b>
6.8284271247462

<b>Input 2:</b>
3 3
0 0
1 0
-1 0
0 1
1 0
1 1

<b>Output 2:</b>
7.8416192529638</pre><h3>Explanation:</h3>
<p style="text-align:justify">
<b>Case 1.</b> Here the optimal way is to use the 1st and the 3rd spell cards. The new coordinates of the point <b>A</b> will be <b>(1, 2)</b>. So the circumference of the new triangle <b>ABC</b> is: <b>|(1, 2) &minus; (1, 0)| + |(1, 0) &minus; (-1, 0)| + |(-1, 0) &minus; (1, 2)| = 4 + 2 * sqrt(2)</b>.
</p>
<p style="text-align:justify">
<b>Case 2.</b> Here the optimal way is to use all of the spell cards. The new coordinates of the point <b>A</b> will be <b>(2, 2)</b>. So the circumference of the new triangle <b>ABC</b> is: <b>|(2, 2) &minus; (1, 0)| + |(1, 0) &minus; (-1, 0)| + |(-1, 0) &minus; (2, 2)| = 2 + sqrt(5) + sqrt(13)</b>.
</p>
