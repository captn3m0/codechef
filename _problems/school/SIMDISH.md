---
{"category_name":"school","problem_code":"SIMDISH","problem_name":"Similar Dishes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"errichto","problem_tester":null,"date_added":"4-04-2017","tags":{"0":"april17","1":"errichto"},"editorial_url":"https://discuss.codechef.com/problems/SIMDISH","time":{"view_start_date":1492421400,"submit_start_date":1492421400,"visible_start_date":1492421400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/mandarin/SIMDISH.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/russian/SIMDISH.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/vietnamese/SIMDISH.pdf">Vietnamese</a> as well.</h3>

<p>Chef has just found a recipe book, where every dish consists of exactly four ingredients.
He is going to choose some two dishes and prepare them for dinner.
Of course, he likes diversity and wants to know whether the two dishes are <i>similar</i>.</p>

<p>Two dishes are called <i>similar</i> if at least half of their ingredients are the same.
In other words, at least two of four ingredients of the first dish should also be present in the second dish.
The order of ingredients doesn't matter.</p>

<p>Your task is to examine <b>T</b> pairs of dishes.
For each pair, check if the two dishes are similar and print "similar" or "dissimilar" accordingly.</p>




<h3>Input</h3>

<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>

<p>
The first line of each test case contains four distinct strings, denoting ingredients needed for the first dish.
Each ingredient is represented by a string of length between 2 and 10 inclusive, consisting of lowercase English letters.
</p>

<p>The second line of each test case describes the second dish in the same format.</p>

<h3>Output</h3>

<p>For each test case, output a single line containing the answer — "similar" if at least half of the ingredients are same, and "dissimilar" otherwise (without the quotes).</p>



<h3>Constraints</h3>

<ul>
<li>1 ≤ <b>T</b> ≤ 200</li>
<li>The length of each string will be between 2 and 10 inclusive.</li>
</ul>




<h3>Example</h3>

<pre><b>Input:</b>
5
eggs sugar flour salt
sugar eggs milk flour
aa ab ac ad
ac ad ae af
cookies sugar grass lemon
lemon meat chili wood
one two three four
one two three four
gibberish jibberish lalalalala popopopopo
jibberisz gibberisz popopopopu lalalalalu

<b>Output:</b>
similar
similar
dissimilar
similar
dissimilar
</pre>




<h3>Explanation</h3>

<p><b>Test case 1.</b> The first dish consists of ingredients: eggs, sugar, flour, salt, while the second dish consists of: sugar, eggs, milk, flour. Three of four ingredients are present in both dishes (eggs, sugar, flour) so the two dishes are similar.</p>

<p><b>Test case 2.</b> This example shows that strings in the input don't necessarily represent real food.
The answer is again "similar", because two ingredients are present in both dishes ("ac" and "ad").</p>

<p><b>Test case 3.</b> The only common ingredient is lemon, so the answer is "dissimilar".
Remember that at least two ingredients should be present in both dishes.</p>