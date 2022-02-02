---
{"category_name":"easy","problem_code":"BUYING2","problem_name":"Buying Sweets","languages_supported":{"0":"C","1":"CPP 4.9.2","2":"CPP14","3":"JAVA"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"gennady.korotkevich","problem_tester":"gamabunta","date_added":"4-10-2012","tags":{"0":"ad","1":"cook27","2":"gennady"},"time":{"view_start_date":1350845041,"submit_start_date":1350845041,"visible_start_date":1350845041,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p style="text-align:justify">Banknotes in the state of Strangeland don't have any regulated values like 1, 5, 10, 20, 50, 100, etc. In fact, it's possible to see any positive integer on a banknote of Strangeland. Indeed, this isn't the most convenient thing.</p>
<p style="text-align:justify">Ann is working as a sweet seller at a shop in Strangeland. Every kind of sweets in this shop has its own cost, and sweets of the same kind have the same cost.</p>
<p style="text-align:justify">Customers in Strangeland are strange. A customer points at some kind of sweets and gives several banknotes to the seller. This means that he wants to buy a positive number of sweets of that kind. He doesn't tell the exact number of sweets he wants to buy. The only thing Ann knows is: <b>an 'adequate' customer won't give any extra banknotes</b>. It means that if you throw away any banknote, the resulting amount of money won't be enough to buy the wanted number of sweets.</p>
<p style="text-align:justify">Ann has to determine the number of sweets the customer wants. Help Ann write a program which determines this number or tells that it's impossible.</p>
<h3>Input</h3>
<p style="text-align:justify">The first line of the input contains a single integer <b>T</b>, the number of test cases (no more than 20). <b>T</b> test cases follow. Each test case consists of two lines. The first of these lines contains two integers <b>N</b> and <b>X</b> (1 ≤ <b>N</b>, <b>X</b> ≤ 100) separated by a single space. <b>N</b> is the number of banknotes given by the customer. <b>X</b> is the cost of a single sweet of the chosen kind. The second of these lines contains <b>N</b> space-separated integers <b>A<sub>i</sub></b> (1 ≤ <b>A<sub>i</sub></b> ≤ 100), the values of the banknotes.</p>
<h3>Output</h3>
<p style="text-align:justify">For each test case output exactly one line containing a single integer:</p>
<ul>
<li><b>-1</b> if the customer is inadequate and has given extra banknotes, or</li>
<li><b>K</b>, the number of sweets the customer wants to buy. If there are several possible answers, output the <b>largest</b> of them.</li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
4 7
10 4 8 5
1 10
12
2 10
20 50

<b>Output:</b>
-1
1
7
</pre><h3>Explanation</h3>
<p style="text-align:justify">In the first test case, the total amount of money received from the customer is 27. He can't buy more than 3 sweets with this amount. If you throw away the banknote of value 5 (or of value 4), it will still be possible to buy 3 sweets. Hence the customer is inadequate.</p>
<p style="text-align:justify">In the second test case, it's clear that he wants to buy just one sweet (note that this number should be positive).</p>
<p style="text-align:justify">In the third test case, the total amount of money received is 70, which is enough for 7 sweets. The customer might want to buy only 6 sweets, but we are interested in the largest possible answer.</p>
