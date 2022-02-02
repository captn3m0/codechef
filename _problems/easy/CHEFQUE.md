---
{"category_name":"easy","problem_code":"CHEFQUE","problem_name":"Chef and Queries","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.4"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":null,"date_added":"9-12-2015","tags":{"0":"bitset","1":"cook65","2":"easy","3":"hashing","4":"mgch"},"editorial_url":"http://discuss.codechef.com/problems/CHEFQUE","time":{"view_start_date":1450636200,"submit_start_date":1450636200,"visible_start_date":1450636200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK65/mandarin/CHEFQUE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK65/russian/CHEFQUE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK65/vietnamese/CHEFQUE.pdf">Vietnamese</a> as well.</h3>


<p>
As part of his daily job, Chef has to solve problems involving sets. Till now, Chef has been using inefficient methods to solve his set related problem, wasting a lot of his precious time. He has agreed to pay you a lot of money for solving the following problem for him efficiently.
</p>
<p>
First, Chef needs to perform <b>Q</b> operations on a set. Each operation is either:
<ul>
<li>1. Add a number to the set (if this number is NOT already present in the set).</li>
<li>2. Erase a number from the set (if this number exists in the set).</li>
</ol>
</p>

<p>
Then, he needs to find the sum of all elements of the set after performing these <b>Q</b> queries. Your job is to find this sum for him quickly.
</p>

<h3>Input</h3>
The first line of input contains four integers — <b>Q</b>, <b>S<sub>1</sub></b>, <b>A</b>, <b>B</b>. <b>S<sub>1</sub></b> is the first number in the operations. <b>A</b> and <b>B</b> are special constants explained later.
<p>
Every operation <b>S<sub>i</sub></b> is represented by a single integer. If <b>S<sub>i</sub></b> is odd, then it represents the first operation, otherwise the second type, and in both of them the integer you have to add/delete equals [<b>S<sub>i</sub></b> / 2], where [] is the greatest integer (or floor) function.
<p> 
<b>S<sub>i</sub></b> = (<b>A</b>*<b>S<sub>i-1</sub></b> + <b>B</b>) mod <b>2<sup>32</sup></b> when <b>i</b> > 1.
</p>
<p>
<b>Note:</b> In this problem, the time limit is very tight. Using built-in data structures, such as set/unordered_set in C++ or TreeSet/HashSet in Java, may lead to a Time Limit Exceed verdict.
</p>

<h3>Output</h3>
Output a single line containing a single integer — sum of elements in the set after <b>Q</b> queries.

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>Q</b> ≤ 10<sup>7</sup></li>
<li>1 ≤ <b>S<sub>1</sub>, A, B</b> ≤ 10<sup>9<sup></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
<tt>5 1 1 1
</tt>
<b>Output:</b>
<tt>3
</tt>

<b>Input:</b>
<tt>10000000 777777777 777777777 777777777
</tt>
<b>Output:</b>
<tt>5362358669068782</tt>
</pre>

<h3>Explanation:</h3>
<p>
The sequence {S<sub>i</sub>} is 1, 2, 3, 4, 5:
<p>
Operation 1, 1 mod 2 = 1, add number [1 / 2] = 0 to set, sum is 0.
</p>
<p>
Operation 2, 2 mod 2 = 0, erase number [2 / 2] = 1 from set, 1 is not in set, so nothing happens, sum is 0.
</p>
<p>
Operation 3, 3 mod 2 = 1, add number [3 / 2] = 1 to set, sum is 1.
</p>
<p>
Operation 4, 4 mod 2 = 0, erase number [4 / 2] = 2 from set, 2 is not in set, so nothing happens, sum is 1.
</p>
<p>
Operation 5, 5 mod 2 = 1, add number [5 / 2] = 2 to set, sum is 3.
</p>