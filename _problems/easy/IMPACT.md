---
{"category_name":"easy","problem_code":"IMPACT","problem_name":"Some Impact","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kalpitk","problem_tester":null,"date_added":"6-04-2019","tags":{"0":"kalpitk"},"time":{"view_start_date":1555270200,"submit_start_date":1555270200,"visible_start_date":1555270200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Consider the infinite $x$ axis. There are $N$ impacts on this X-axis at integral points ($X_1$,$X_2$,....$X_N$)  (all distinct) . An impact at a point $X$<sub>i</sub> propagates such that at a point $X$<sub>0</sub>, the effect of the impact is $K^{|X_i - X_0|}$. Given the point $X_0$, $N$ and $K$. Assume the total impact on $X_0$ is $M$, find if it is possible to do so.</p>
<strong>Note:</strong> You are not required to find the set X<br>

<p>Formally print "yes" if this is possible and "no" if not possible.</p>

<h3>Input:</h3>
<ul>
<li>First line will contain $T$, number of testcases. Then the testcases follow. </li>
<li> Each testcase contains of a single line of input, four integers $N$,$K$,$M$,$X$<sub>0</sub>  </li>
</ul>

<h3>Output:</h3>
<ul>
<li> The output of each test case is either "yes" or "no"
</li>
</ul>

<h3>Constraints </h3>
<ul>
<li> $1\leq T \leq 1000$</li>
<li> $1\leq N \leq 100$</li>
<li> $1\leq K \leq 1000$</li>
<li> $1\leq M \leq 10^{18}$</li>
<li> $-10^9 \leq X_0 \leq 10^9$ </li>
</ul>

<h3>Sample Input:</h3>
	2<br>
       4 3 10 10<br>
       2 3 10 10<br>

        

<h3>Sample Output:</h3>
	no<br>
        yes<br>

	
