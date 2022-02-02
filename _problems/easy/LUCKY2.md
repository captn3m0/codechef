---
{"category_name":"easy","problem_code":"LUCKY2","problem_name":"Lucky Number","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"anton_lunyov","date_added":"11-11-2011","tags":{"0":"easy","1":"march12","2":"witua"},"editorial_url":"http://discuss.codechef.com/problems/LUCKY2","time":{"view_start_date":1331460978,"submit_start_date":1331460978,"visible_start_date":1331458200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p> Chef loves lucky numbers. Everybody knows that lucky numbers are positive integers whose decimal representation contains only the lucky digits <b>4</b> and <b>7</b>. For example, numbers <b>47</b>, <b>744</b>, <b>4</b> are lucky and <b>5</b>, <b>17</b>, <b>467</b> are not.

</p><p> Let <b>F(X)</b> equals to the number of lucky digits in decimal representation of <b>X</b>. Chef wants to know the number of such integers <b>X</b>, that <b>L ≤ X ≤ R</b> and <b>F(X)</b> is a lucky number. Help him and calculate that number modulo <b>10<sup>9</sup>+7</b>.

<h3>Input</h3>
</p><p>First line contains one integer <b>T</b>, the number of test cases. Each of the following <b>T</b> lines contains two space separated positive integers <b>L</b> and <b>R</b>.

<h3>Output</h3>
</p><p>For each of the <b>T</b> test cases print one integer, the number of such <b>X</b>, that <b>L ≤ X ≤ R</b> and <b>F(X)</b> is a lucky number, modulo <b>1000000007</b>.

<h3>Constraints</h3>
</p><p>
1 ≤ <b>T</b> ≤ 10
</p><p>
1 ≤ <b>L</b> ≤ <b>R</b> ≤ 10<sup>1000</sup>

<h3>Example</h3>

<pre>
<b>Input:</b>
4
1 100
1 10000
1 100000
4444 4447

<b>Output:</b>
0
16
640
2
</pre>

<h3>Notes</h3>
</p><p>First test case: of course, any number of less than 4 digits can't contain lucky number of lucky digits, so the answer is 0.
</p><p>Second test case: 16 required numbers are <b>4444 4447 4474 4477 4744 4747 4774 4777 7444 7447 7474 7477 7744 7747 7774 7777</b>.
</p><p>Third test case: there are 640 required lucky numbers. Some of them are <b>4474, 14747, 41474, 77277, 44407, 74749</b>.
</p><p>Fourth test case: the only two required numbers are <b>4444</b> and <b>4447</b>.</p>