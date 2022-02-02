---
{"category_name":"medium","problem_code":"LUCKY9","problem_name":"Lucky Balance","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"laycurse","date_added":"15-02-2012","tags":{"0":"binomial","1":"maths","2":"medium","3":"nov12","4":"witua"},"editorial_url":"http://discuss.codechef.com/problems/LUCKY9","time":{"view_start_date":1352712600,"submit_start_date":1352712600,"visible_start_date":1352712600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Chef has the string <b>s</b> of length <b>n</b> consisted of digits <b>4</b> and <b>7</b>.
The string <b>s</b> is called balanced
if there exits such integer <b>x</b> (<b>1</b> ≤ <b>x</b> ≤ <b>n</b>) that the number of digits <b>4</b> in substring <b>s[1; x)</b> is equal to the number of digits <b>7</b> in substring <b>s(x; n]</b>,
where <b>s[1; x)</b> is the substring from the <b>1</b>st digit to (<b>x-1</b>)th digit of <b>s</b>, and <b>s(x; n]</b> is the substring from the (<b>x+1</b>)th digit to <b>n</b>th digit of <b>s</b>.
For example, <b>s = 747474</b> is a balanced string, because <b>s[1; 4) = 747</b> has one <b>4</b> and <b>s(4; 6] = 74</b> has one <b>7</b>.
Note that <b>x</b> can be <b>1</b> or <b>n</b> and <b>s[1; 1)</b> and <b>s(n; n]</b> denote an empty string.

</p><p>
In one turn Chef can choose any pair of consecutive digits and swap them.
Find for Chef the total number of different balanced string that can be obtained from string <b>s</b> using any (even 0) number of turns.
Print the result modulo <b>1000000007</b>.

<h3>Input</h3>
</p><p>
The first line of the input contains one integer <b>T</b>, the number of test cases.
Then <b>T</b> lines follow, each of which contains string <b>s</b> for the corresponding test.

<h3>Output</h3>
</p><p><b>T</b> lines, each of which contains single integer - the answer for the corresponding test modulo <b>10<sup>9</sup>+7</b>.

<h3>Constraints</h3>
</p><p>
1 ≤ <b>T</b> ≤ 10
</p><p>
1 ≤ <b>n</b> ≤ 5000

<h3>Example</h3>

<pre>
<b>Input:</b>
2
47
4477

<b>Output:</b>
1
4
</pre></p>