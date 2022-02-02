---
{"category_name":"easy","problem_code":"APPROX","problem_name":"Approximately","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"anton_lunyov","date_added":"26-12-2012","tags":{"0":"march13","1":"simple","2":"simple","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/APPROX","time":{"view_start_date":1363000152,"submit_start_date":1363000152,"visible_start_date":1363000099,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef has recently learnt some new facts about the famous number <b>&pi;</b>. For example, he was surprised that ordinary fractions are sometimes used to represent this number approximately. For example, <b>22/7</b>, <b>355/113</b> or even <b>103993/33102</b>.</p>
<p>Soon, by calculating the value of <b>22/7</b> and <b>355/113</b> on paper Chef became quite disappointed because these values are not precise enough. For example, <b>22/7</b> differs in the third digit after the decimal point. So, these values are definitely should not be used for serious calculations.</p>
<p>However, Chef doesn't know anything about <b>103993/33102</b>. This fraction is quite inconvenient to calculate on paper. Chef is curious how precise this value is. So he asks you to help him and to calculate the first <b>K</b> digits after the decimal point of such an approximation of <b>&pi;</b>. He consider this ordinary fraction as infinite decimal fraction so formally he asks you to calculate this approximation <b>truncated</b> to the first <b>K</b> digits after the decimal point.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. The description of <b>T</b> test cases follows. The only line of each test case contains a single integer <b>K</b>.<br /></p>
<h3>Output</h3>
<p>For each test case output a single line containing the value of <b>103993/33102</b> truncated to the first <b>K</b> digits after the decimal point. Note that for <b>K = 0</b> you should output just <b>"3"</b> without decimal point (quotes are for clarity).</p>
<h3>Constraints</h3>
<ul>
<li><b>0</b> &le; <b>K</b> &le; <b>10<sup>6</sup></b></li>
<li><b>1</b> &le; <b>T</b> &le; <b>2000</b></li>
<li>The sum of <b>K</b> over the input does not exceed <b>10<sup>6</sup></b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
0
6
20

<b>Output:</b>
3
3.141592
3.14159265301190260407
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Here <b>K = 0</b> so we don't need to output any digits after the decimal point. The decimal point itself also should not be output.</p>
<p><b>Example case 2.</b> Note that here we <b>truncate</b> (not round) the actual value of <b>103993/33102</b> to <b>6</b> digits after the decimal point. As you see from example case 3 rounded value here differs from truncated one.</p>
<p><b>Example case 3.</b> This example is only to show that this approximation of <b>&pi;</b> is also far from perfect :)</p>
