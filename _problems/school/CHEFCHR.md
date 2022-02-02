---
{"category_name":"school","problem_code":"CHEFCHR","problem_name":"Chef And His Characters","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"shivam010","problem_tester":"r_64","date_added":"18-01-2018","tags":{"0":"cakewalk","1":"feb18","2":"shivam010"},"editorial_url":"https://discuss.codechef.com/problems/CHEFCHR","time":{"view_start_date":1518427800,"submit_start_date":1518427800,"visible_start_date":1518427800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/mandarin/CHEFCHR.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/russian/CHEFCHR.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/vietnamese/CHEFCHR.pdf">Vietnamese</a> as well.</h3>

<p>Chef was reading a book. He decided to highlight all the lovely sentences of the book. He calls a sentence a <i>lovely</i> sentence if, after removing all the non-alphabetical characters (like punctuation and spaces) from it and converting all uppercase letters to lowercase, it is possible to choose <b>four contiguous characters</b> from the sentence and reorder them to create the string “chef”.</p>

<p>Chef has almost completed the highlighting work, only a few sentences are left to be checked and highlighted. Now, he wants your help in checking the remaining sentences, as he has to help his mother in the kitchen.</p>

<p>Each sentence <b>s</b> has already been preprocessed — all non-alphabetical characters have been erased and all remaining uppercase characters converted to lowercase. You should determine whether <b>s</b> is a lovely sentence or not. If it is a lovely sentence, then Chef is also interested in the number of possible ways to select 4 contiguous characters that can be reordered to give his name (the string "chef").</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first and only line of each test case contains a single string <b>s</b>, denoting a preprocessed sentence.</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, print a single line.</li>
<li>If the string <b>s</b> is not a lovely string, this line should contain a single string <tt>“normal”</tt> (without quotes).</li>
<li>Otherwise, it should contain the string <tt>”lovely”</tt> (without quotes) followed by one integer — the number of ways to select the four contiguous characters.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 200,000</li>
<li>1 ≤ <b>|s|</b> ≤ 500,000</li>
<li>sum of <b>|s|</b> for all test cases ≤ 2,000,000</li>
<li><b>s</b> contains only lowercase English letters</li>
</ul>

<h3>Subtasks</h3>
<p>
<b>Subtask #1 (20 points):</b> 1 ≤ <b>|s|</b> ≤ 2000
</p>

<p>
<b>Subtask #2 (80 points):</b> original constraints
</p>

<h3>Example</h3>
<pre>
<b>Input:</b>

5
ifchefisgoodforchess
fehcaskchefechohisvoice
hecfisaniceperson
letscallchefthefch
chooseaprogrammer

<b>Output:</b>

lovely 2
lovely 3
lovely 1
lovely 3
normal
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> We can select “fche” (the substring starting at index 2) or “chef” (index 3).</p>
<p><b>Example case 2:</b> We can select “fehc” (index 1), “chef” (index 8) or “fech” (index 11).</p>
<p><b>Example case 3:</b> We can only select “hecf” (index 1).</p>
<p><b>Example case 4:</b> We can select “chef” (index 9), “hefc” (index 14), or “efch” (index 15).</p>
<p><b>Example case 5:</b> No four contiguous characters can be reordered to form Chef's name.</p>
