---
{"category_name":"easy","problem_code":"GRANAMA","problem_name":"Granama Recipes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vamsi_kavala","problem_tester":"laycurse","date_added":"28-08-2012","tags":{"0":"cakewalk","1":"dec12","2":"simple","3":"vamsi_kavala"},"editorial_url":"http://discuss.codechef.com/problems/GRANAMA","time":{"view_start_date":1355218909,"submit_start_date":1355218909,"visible_start_date":1355218200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef has learned a new technique for comparing two recipes. A recipe contains a list of ingredients in increasing order of the times they will be processed. An ingredient is represented by a letter 'a'-'z'. The <b>i</b>-th letter in a recipe denotes the <b>i</b>-th ingredient. An ingredient can be used multiple times in a recipe.</p>
<p>The technique is as follows. Compare two recipes by comparing their respective lists. If the sets of ingredients used in both recipes are equal and each ingredient is used the same number of times in both of them (processing order does not matter), they are declared as <b>granama</b> recipes. ("granama" is the Chef-ian word for "similar".)</p>
<p>Chef took two recipes he invented yesterday. He wanted to compare them using the technique. Unfortunately, Chef forgot to keep track of the number of times each ingredient has been used in a recipe. He only compared the ingredients but NOT their frequencies. More precisely, Chef considers two recipes as granama if there are no ingredients which are used in one recipe and not used in the other recipe.</p>
<p>Your task is to report whether Chef has correctly classified the two recipes (as granama or not granama) although he forgot to keep track of the frequencies.</p>
<h3>Input</h3>
<p>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description for <b>T</b> test cases follows. Each test case consists of a single line containing two space-separated strings <b>R</b> and <b>S</b> denoting the two recipes.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing "YES" (quotes for clarity) if Chef correctly classified the two recipes as granama or not granama. Otherwise, output a single line containing "NO" (quotes for clarity) if Chef declared two recipes as granama when they actually are not.</p>
<h3>Constraints</h3>
<p>
1 ≤ <b>T</b> ≤ 100<br />1 ≤ |<b>R</b>|, |<b>S</b>| ≤ 1000</p>
<h3>Example</h3>
<p><b>Input:</b><br/></br/></p>
<pre>
3
alex axle
paradise diapers
alice bob

</pre><p>
<b>Output:</b><br/></br/></p>
<pre>
YES
NO
YES

</pre><p>
<b>Explanation:</b><br/></br/></p>
<p>Example case 1: Chef declared them as granama recipes. They are actually granama because the sets of ingredients and the number of times each ingredient has been used are equal. The Chef got it right!</p>
<p>Example case 2: Chef declared them as granama recipes because both sets of ingredients are equal. But they are NOT granama since ingredient 'a' has been used twice in the first recipe but only once in the second. The Chef was incorrect!</p>
<p>Example case 3: Chef declare them as not granama. They are not granama as the sets of ingredients are different. Hence, the Chef was right!</p>
