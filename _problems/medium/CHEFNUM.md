---
{"category_name":"medium","problem_code":"CHEFNUM","problem_name":"Chef and Amazingness of Numbers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"prateekg603","problem_tester":"kevinsogo","date_added":"29-03-2016","tags":{"0":"dynamic","1":"enumeration","2":"may16","3":"prateekg603"},"editorial_url":"http://discuss.codechef.com/problems/CHEFNUM","time":{"view_start_date":1463391000,"submit_start_date":1463391000,"visible_start_date":1463391000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY16/mandarin/CHEFNUM.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MAY16/russian/CHEFNUM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY16/vietnamese/CHEFNUM.pdf">Vietnamese</a> as well.</h3>
<p>
Chef defined <em>amazingness</em> of a number <b>n</b> as follows. Let array <b>a</b> denote the decimal representation of <b>n</b>.<br />
<em>amazingness</em> of <b>n</b> is defined by following pseudo code.</p>
<pre>
<code>
amazingness(a)
{
    set <b>s</b>;
    int ans = 0;
    for ( int i = 0; i &lt; a.length(); i++ ) {
         int val = 0;
         for ( int j = i; j &lt; a.length(); j++ ) {
            val ^= a[j];  
            // a[j] denotes digit at j-th (0-based indexing) position of <b>n</b> counting <br/> from most signficant digit (left to right).
            if (val not present in set s before) {
                 ans += val;
                 add val to set <b>s</b>
            }
         }
   }
   return ans;
}
</br/></code></pre>
<p>
Given two integers <b>L, R</b>. Find out the following sum : <em>amazingness</em><sub><b>L</b></sub> + <em>amazingness</em><sub><b>L + 1</b></sub> + ... + <em>amazingness</em><sub><b>R</b></sub>. As the answer could be large, print your answer modulo <b>10<sup>9</sup> + 7 (1000000007)</b>
</p>
<h3>Input</h3>
<ul>
<li>First line of the input contains an integer <b>T</b> denoting the number of test cases. </li>
<li>Each of the next <b>T</b> lines will contain two space separated integer <b>L, R</b>.
</li></ul>
<h3>Output</h3>
<p>
For each test case, output a single integer in separate line corresponding to the value of desired sum.
</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>L, R</b> ≤ <b>10<sup>9</sup></b>.</li>
</ul>
<h3>Subtasks</h3>
<p>
<b>Subtask #1 : (30 points)</b></p>
<ul>
<li><b>1 ≤ L, R ≤ 10<sup>6</sup></b></li>
</ul>

<p>
<b>Subtask #2 : (70 points) </b></p>
<ul>
<li><b>1 ≤ L, R ≤ 10<sup>9</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
1 5
11 14

<b>Output:</b>
15
23
</pre><h3>Explanation</h3>
<p><b>Example case 2:</b> The <em>amazingness</em> values of numbers 11, 12, 13, 14 are 1, 6, 6 and 10 respectively. They sum up to 23.</p>
