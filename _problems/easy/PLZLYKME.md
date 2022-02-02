---
{"category_name":"easy","problem_code":"PLZLYKME","problem_name":"Please like me","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kaushik_iska","problem_tester":"gerald","date_added":"8-12-2013","tags":{"0":"jan14","1":"kaushik_iska","2":"programming","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/PLZLYKME","time":{"view_start_date":1389605400,"submit_start_date":1389605400,"visible_start_date":1389605400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/mandarin/PLZLYKME.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/russian/PLZLYKME.pdf">Russian</a>.</h3>
<p>
    In a far away dystopian world, the measure of the quality of a person’s life is the numbers of likes he gets for an article about their life. For a person to stay alive, he has to acquire at least <strong>L</strong> number of likes before <strong>D</strong> days pass.
</p>
<p>
    People in this world employ various techniques to increase the number of likes. One of the famous ones is to dis-like and re-like their own article once per day. On doing so you can assume that the number of likes for the post increase by a constant factor <strong>C</strong>.
</p>
<p>
So if one starts with <strong>S</strong> likes on Day-1, he would have <strong>D2</strong> = <strong>S + C * S </strong>likes on Day-2,    <strong>D3 = D2 + D2 * C</strong> on Day-3 etc. You are to answer if the person would survive at the end of Day-D or not.
</p>
<p>
    <strong>Input</strong>
</p>
<p>
    <strong> </strong>
</p>
<p>
    First line contains a single positive integer <strong>T</strong> denoting the number of test cases. The following <strong>T</strong> lines represent a test case each. Each test case contains 4 space-separated integers <strong>L, D, S and C</strong>.<strong></strong>
</p>
<p>
    <strong>Output</strong>
</p>
<p>
    <strong> </strong>
</p>
<p>
For each test case, print a single line containing “<strong>ALIVE AND KICKING</strong>” if the person would live, otherwise print, “<strong>DEAD AND ROTTING</strong>”.
</p>
<p>
    <strong>Constraints</strong>
</p>
<p>
<strong>1 &lt;= T &lt;= 1000</strong><br /><br />
<strong>1 &lt;= L &lt;= 1000000000</strong><br /><br />
<strong>1 &lt;= D &lt;= 1000000000</strong><br /><br />
<strong>1 &lt;= S &lt;= 1000000000</strong><br /><br />
<strong>1 &lt;= C &lt;= 1000000000</strong><br />
</p>
<p>
<b>Sample cases:</b><br/></br/></p>
<pre>
<b>Input</b>
2
5 1 5 1
10 2 2 2

<b>Output</b>
ALIVE AND KICKING
DEAD AND ROTTING
</pre>
<p>
<b>Explanation</b><br/><br />
In the first case by the end of Day-1 we would be having <b>S</b> that is <b>5</b> number of likes, as it is ≥ <b>L</b>, the answer is <b>ALIVE AND KICKING</b>.<br /><br />
In the second case, <b>D2 =S + C*S</b>, therefore <b>D2 = 2 + 2 * 2 = 6</b>, as 6 is less than 10, the answer is <b>DEAD AND ROTTING</b>.
</br/></p>
