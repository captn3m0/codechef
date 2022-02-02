---
{"category_name":"medium","problem_code":"LUCKY8","problem_name":"Little Elephant and Product","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"anton_lunyov","date_added":"3-02-2012","tags":{"0":"ad","1":"easy","2":"june12","3":"witua"},"editorial_url":"http://discuss.codechef.com/problems/LUCKY8","time":{"view_start_date":1339403687,"submit_start_date":1339403687,"visible_start_date":1339407000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p> A Little Elephant from the Zoo of Lviv likes lucky numbers very much. Everybody knows that the lucky numbers are positive integers whose decimal representation contains only the lucky digits <b>4</b> and <b>7</b>. For example, numbers <b>47</b>, <b>744</b>, <b>4</b> are lucky and <b>5</b>, <b>17</b>, <b>467</b> are not.

</p><p> Let <b>F<sub>4</sub></b>(<b>X</b>) be the number of digits <b>4</b> in the decimal representation of <b>X</b>, and <b>F<sub>7</sub></b>(<b>X</b>) be the number of digits <b>7</b> in the decimal representation of <b>X</b>. For example, <b>F<sub>4</sub></b>(<b>456</b>) = <b>1</b>, <b>F<sub>4</sub></b>(<b>444</b>) = <b>3</b>, <b>F<sub>7</sub></b>(<b>1</b>) = <b>0</b>, <b>F<sub>7</sub></b>(<b>747</b>) = <b>2</b>. The Little Elephant wants to know the largest product <b>F<sub>4</sub></b>(<b>X</b>) ∙ <b>F<sub>7</sub></b>(<b>X</b>), where <b>L</b> ≤ <b>X</b> ≤ <b>R</b>. In other words he wants to know the value
 <b>max</b>{<b>F<sub>4</sub></b>(<b>X</b>) ∙ <b>F<sub>7</sub></b>(<b>X</b>) : <b>L</b> ≤ <b>X</b> ≤ <b>R</b>}.

<h3>Input</h3>
</p><p> The first line of the input file contains an integer <b>T</b>, the number of test cases. <b>T</b> test cases follow. The only line of each test case contains two integers <b>L</b> and <b>R</b> separated by exactly one space.

<h3>Output</h3>
</p><p> For each test case output a single line containing the answer for the corresponding test case.

<h3>Constraints</h3>
</p><p>
1 ≤ <b>T</b> ≤ 1000
</p><p>
1 ≤ <b>L</b> ≤ <b>R</b> ≤ 10<sup>18</sup>

<h3>Example</h3>

<pre>
<b>Input:</b>
3
1 10
1 100
47 74

<b>Output:</b>
0
1
1
</pre>

<h3>Explanation</h3>
</p><p>In both second and third test cases the maximal product is achieved at the numbers <b>47</b> and <b>74</b>.</p>