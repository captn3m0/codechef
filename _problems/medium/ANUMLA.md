---
{"category_name":"medium","problem_code":"ANUMLA","problem_name":"Mahesh and his lost array","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"anudeep2011","problem_tester":"kostya_by","date_added":"14-10-2014","tags":{"0":"anudeep2011","1":"cook51","2":"easy","3":"greedy","4":"heap","5":"multiset"},"editorial_url":"http://discuss.codechef.com/problems/ANUMLA","time":{"view_start_date":1413744000,"submit_start_date":1413744000,"visible_start_date":1413744000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK51/mandarin/ANUMLA.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK51/russian/ANUMLA.pdf">Russian</a> as well.</h3>
<p>
Mahesh got a beautiful array named <b>A</b> as a birthday gift from his beautiful girlfriend Namratha. There are <b>N</b> positive integers in that array. Mahesh loved the array so much that he started to spend a lot of time on it everyday. One day, he wrote down all possible subsets of the array. Then for each subset, he calculated the sum of elements in that subset and wrote it down on a paper. Unfortunately, Mahesh lost the beautiful array :(. He still has the paper on which he wrote all subset sums. Your task is to rebuild beautiful array <b>A</b> and help the couple stay happy :)
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.<br />
First line of each test case contains one integer <b>N</b>, the number of elements in <b>A</b>.<br />
Second line of each test case contains <b>2^N</b> integers, the values written on paper</p>
<h3>Output</h3>
<p>For each test case, output one line with <b>N</b> space separated integers in non-decreasing order.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>50</b>
</li><li><b>1</b> ≤ <b>N</b> ≤ <b>15</b>
</li><li><b>0</b> ≤ <b>Values on paper</b> ≤ <b>10^9</b>
</li><li><b>All input values are valid. A solution always exists</b>
</li></ul>
<h3>Example</h3>
<pre><b>Input</b>
2
1
0 10
2
0 1 1 2

<b>Output</b>
10
1 1
</pre><h3>Explanation</h3>
<p><b>Test case #2</b><br />
For the array [1,1], possible subsets are {}, {1}, {1}, {1,1}, respective sums are 0, 1, 1, 2.</p>
