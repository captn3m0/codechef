---
{"category_name":"medium","problem_code":"CBARS","problem_name":"A Wonderful Chocolate","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"witalij_hq ","problem_tester":"laycurse","date_added":"2-08-2012","tags":{"0":"matrix","1":"nov12","2":"simple","3":"witalij_hq"},"editorial_url":"http://discuss.codechef.com/problems/CBARS","time":{"view_start_date":1352712600,"submit_start_date":1352712600,"visible_start_date":1352712600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
A few days ago Chef decided to cook a new dish – chocolate.  This must be something amazing. The idea is that chocolate bar will be divided into cells. It must be long, but narrow. To interest customers every bar must be unique. Bar will consist of cells of black or white chocolate. In addition every bar must be good looking. It means that the bar must not contain any totally white or totally black rectangle, whose width <b>and</b> length are more than 1 (Note that a bar is good if <b>(width > 1 and length = 1)</b> or <b>(length > 1 and width = 1)</b>). Now, Chef wants to know how many bars can he cook? He’s not good in computer programming, so this task is for you.<br />
 By the way, it's not permitted to rorate bars. It means that WBB and BBW are different bars.</p>
<h3>Input</h3>
<p>
Input contains two integers: width <i>a (1 ≤ a ≤ 6)</i> and length <i>b (1 ≤ b &lt; 2<sup>63</sup>)</i>.</p>
<h3>Output</h3>
<p>
Print in output a single integer which is the answer. Answer can be a very big number, so print it modulo <i>10<sup>9</sup>+7 (1000000007)</i>.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2 2

<b>Output:</b>
14

<b>Input:</b>
3 3

<b>Output:</b>
322
</pre><h3>Explanation</h3>
<p>
In the first sample, there are 2^(2*2) = 16 ways coloring the chocolate in total, and the only following 2 chocolates are not good
</p>
<pre>
<b>WW</b>
<b>WW</b>
</pre><p>The bar contains a totally white rectangle of length = 2 and width = 2.</p>
<pre>
<b>BB</b>
<b>BB</b>
</pre><p>The bar contains a totally black rectangle of length = 2 and width = 2.</p>
