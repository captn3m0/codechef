---
{"category_name":"hard","problem_code":"COOLNUM","problem_name":"Cool Numbers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":8,"source_sizelimit":30000,"problem_author":"iscsi ","problem_tester":"anton_lunyov","date_added":"18-04-2012","tags":{"0":"hard","1":"iscsi","2":"june12","3":"prime"},"editorial_url":"http://discuss.codechef.com/problems/COOLNUM","time":{"view_start_date":1339403579,"submit_start_date":1339403579,"visible_start_date":1339407000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Consider a positive integer <b>N</b>. Denote its decimal digits by <b>X<sub>1</sub></b>, <b>X<sub>2</sub></b>,..., <b>X<sub>K</sub></b>. <b>N</b> is called a <b>Cool Number</b> if you can select at most three (but at least one) of its digits such that the following number is divisible by <b>N</b>:

(<b>X<sub>1</sub></b> + <b>X<sub>2</sub></b> + ... + <b>X<sub>K</sub></b> – <b>S</b>)<sup><b>S</b></sup>

where <b>S</b> is the sum of the selected digits.</p>

<p>Let <b>LC(N)</b> be the largest Cool Number which is not greater than <b>N</b>, and <b>UC(N)</b> be the smallest Cool Number which is greater than <b>N</b>. So the following inequalities hold
 <b>LC(N)</b> ≤ <b>N</b> &lt; <b>UC(N)</b>.</p>

<p>Your task is to find for the given positive integer <b>N</b> the values of <b>LC(N)</b> and <b>UC(N)</b>. As you will see from the examples <b>LC(N)</b> and <b>UC(N)</b> exist for every positive integer <b>N</b>.</p>

<p>Consider some examples.</p>

<ul>
<li><b>1458</b> is a Cool Number since ((<b>1</b> + <b>4</b> + <b>5</b> + <b>8</b>) – (<b>1</b> + <b>5</b>))<sup><b>1</b> + <b>5</b></sup> = <b>12<sup>6</sup></b> = <b>2985984</b> is divisible by <b>1458</b>. Note that here we select two digits: <b>1</b> and <b>5</b>.

</li><li>All numbers of the form <b>10<sup>n</sup></b> (<b>n</b> = <b>0</b>, <b>1</b>, <b>2</b>, ...) are Cool. Indeed, if we select just one digit <b>1</b> (the first digit of <b>10<sup>n</sup></b>) in the definition of Cool Number we obtain the number (<b>1</b> + <b>0</b> + ... + <b>0</b> – <b>1</b>)<sup><b>1</b></sup> = <b>0<sup>1</sup></b> = <b>0</b> and it is divisible by <b>10<sup>n</sup></b> (recall that <b>0</b> is divisible by every positive integer). Now consider some positive integer <b>N</b> of <b>n</b> digits. Then, clearly, <b>10<sup>n-1</sup></b> ≤ <b>N</b> &lt; <b>10<sup>n</sup></b> where both <b>10<sup>n-1</sup></b> and <b>10<sup>n</sup></b> are Cool Numbers. Hence <b>LC(N)</b> and <b>UC(N)</b> always exist and, moreover, <b>LC(N)</b> ≥ <b>10<sup>n-1</sup></b> and <b>UC(N)</b> ≤ <b>10<sup>n</sup></b>.
</li></ul>

<h3>Input</h3>

<p>The first line of the input file contains an integer <b>T</b>, the number of test cases. Each of the following <b>T</b> lines contains a positive integer <b>N</b>.

<h3>Output</h3>
</p><p>For each test case output on a single line values of <b>LC(N)</b> and <b>UC(N)</b> separated by a single space.

<h3>Constraints </h3>
</p><p><b>1</b> ≤ <b>T</b> ≤ <b>100000</b>
</p><p><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>1000</sup></b>
</p><p>The total number of digits in all numbers <b>N</b> in the input file does not exceed <b>4000000</b>.

<h3>Example</h3>
<pre>
<b>Input:</b>
4
2
999
1459
18898888

<b>Output:</b>
2 3
999 1000
1458 1460
18895680 18900000
</pre>

<h3>Explanation</h3>

</p><p><b>Case 1.</b> The number <b>2</b> is the largest integer which is not greater than <b>N = 2</b>, the number <b>3</b> is the smallest integer which is greater than <b>N = 2</b>, and they both are Cool Numbers, which can be shown similar to the case of <b>10<sup>n</sup></b> in the example above.</p>

<p><b>Case 2.</b> It is very similar to the first test case and we already know that <b>1000</b> is a Cool Number. So we just have to show that <b>999</b> is a Cool number. But it is clear, since we can select all the three digits so ((<b>9</b> + <b>9</b> + <b>9</b>) – (<b>9</b> + <b>9</b> + <b>9</b>))<sup><b>9</b> + <b>9</b> + <b>9</b></sup> = <b>0<sup>27</sup></b> = <b>0</b> which is divisible by <b>999</b>.</p>

<p><b>Unfortunately, we can't provide you with the explanation of the third and the fourth test cases. You should figure it out by yourself. Please, don't ask about this in comments.</b></p>

<h3>Warning!</h3>
<p><b>There are large input and output files in this problem. Make sure you use fast enough I/O methods.</b></p>