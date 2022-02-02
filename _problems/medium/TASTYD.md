---
{"category_name":"medium","problem_code":"TASTYD","problem_name":"Tasty Dishes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"Rubanenko","problem_tester":"vamsi_kavala","date_added":"28-06-2013","tags":{"0":"Rubanenko","1":"divide","2":"ltime01","3":"medium"},"editorial_url":"http://discuss.codechef.com/problems/TASTYD","time":{"view_start_date":1372581626,"submit_start_date":1372581626,"visible_start_date":1372581299,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Chef's restaurant is the most attractive place to have dinner at. To understand why, let's have a look at a way customers do their orders:
</p>
<p>
There is only one list of <b>N</b> ingredients in the menu. Every ingredient has its beauty value that does not depend on its taste, but on the way it looks, which is expressed as a positive integer. To order a dish, the customer asks Chef to use all the ingredients from <b>L</b> to <b>R</b> (<b>L</b> is strictly less than <b>R</b>). Chef knows that the dish will be tasty and not only beautiful if the sum of its ingredients' beauty values is divisible by <b>K</b>. Chef does not want to use all the ingredients, so he always excludes one of them. Which one? - The least beautiful one! (in other words - which has the minimal beauty value). Now he wonders - how many segments (<b>L,R</b>) are there such that the sum of their beauty values will be divisible by <b>K</b> after excluding the least beautiful ingredient.
</p>
<h3>Input:</h3>
<p>First line of the input consists of two positive integers - <b>N</b> and <b>K</b>. There are <b>N</b> space separated positive integers - beauty values of the ingredients.<br/><br/></br/></br/></p>
<h3>Output:</h3>
<p>Output should consist of a single integer - the answer for the problem. <br/><br/></br/></br/></p>
<h3>Constraints:</h3>
<pre>
1 ≤ <b>N</b> ≤ 2*10<sup>5</sup>
1 ≤ <b>K</b> ≤ 10<sup>9</sup>
1 ≤ <b>beauty value</b> ≤ 10<sup>9</sup>

</pre><h3>Example:</h3>
<p><b>Input:</b></p>
<pre>
4 2
1 2 3 4

</pre><p><b>Output:</b></p>
<pre>
2

</pre><h3>Scoring:</h3>
<p>1 ≤ <b>N</b> ≤ 1000, this subtask is worth <b>21</b> point.<br/><br />
1 ≤ <b>K</b> ≤ 100, this subtask is worth <b>39</b> points.<br/><br />
There are no special constrains for the remaining <b>40</b> points.<br/><br/></br/></br/></br/></br/></p>
<h3>Test generation details: </h3>
<p>
Delivery and sorting of ingredients is quite random thing, so all the test cases will look as follows:<br/><br />
<b>N</b> and <b>K</b> are chosen by setter. An integer <b>M</b> is chosen by setter from interval <b>[100..10^9]</b>. Let <b>B[]</b> be the array of beauty values of ingredients. <b>B[i]</b> is chosen uniformly at random from an interval <b>[1..M]</b> for every <b>1</b> ≤ <b>i</b> ≤ <b>N</b>. After <b>B[]</b> is generated setter can choose a positive integer <b>R</b> and do <b>B[i]</b> = <b>B[i]</b>*<b>R</b> for every <b>1</b> ≤ <b>i</b> ≤ <b>N</b>. It's guaranteed that even after multiplying every <b>B[i]</b> won't exceed <b>10^9</b>.
</br/></p>
