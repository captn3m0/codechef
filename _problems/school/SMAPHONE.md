---
{"category_name":"school","problem_code":"SMAPHONE","problem_name":"Smart Phone","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":"","date_added":"2-11-2015","tags":{"0":"admin3"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SMAPHONE","time":{"view_start_date":1104539400,"submit_start_date":1104539400,"visible_start_date":1104539400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SMAPHONE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
<p> You are developing a <b>smartphone app</b>. You have a list of potential customers who are interested in buying your app. Each customer has a budget and will buy the app at your declared price <u>if and only if</u> the price is less than or equal to the customer's budget.</p>
<br>
<p> You would want to declare a price such that the revenue you earn from the customers is <i>maximized</i>. Find this <b>maximum possible revenue</b>.</p>

<br><b>Example</b>
<p> Suppose you have 4 potential customers and their budgets are Rs 30, Rs 20, Rs 53 and Rs 14.  In this case, the maximum revenue you can get is 60 Rs.</p><br>

<b>How is 60 Rs the maximum revenue?</b>
<p>Revenue of 60 is achieved by selling the app at either Rs 20 or Rs 30.

If we sell the app at 20, then only customer 1, 2 and 3 can buy.
<br>
But total revenue = 20*3 = <b>60</b>
<br><br>
If we would have sold the app at 14 (the lowest price), then all customers could have  bought.<br>
But total revenue would be = 14*4 = <b>56</b> (which is lower than 60).
</p>

<br>
<h3>Input format</h3>

<p>Line 1 : <em>N</em>, the total number of potential customers.</p>
<p>Lines 2 to <em>N</em>+1: Each line has the budget of a potential customer.</p>

<br>
<h3>Output format</h3>

<p> The output consists of a single integer, the maximum possible revenue you can earn from selling your app.</p>

<br>
<h3>Sample Input 1</h3>

<pre>
4
30
20
53
14
</pre>

<br>
<h3>Sample Output 1</h3>

<pre>
60
</pre>

<br>
<h3>Sample Input 2</h3>

<pre>
5
40
3
65
33
21
</pre>

<br>
<h3>Sample Output 2</h3>

<pre>
99
</pre>


<br>
<h3>Test data</h3>

<p>Each customer's budget is between 1 and 10^8, inclusive.</p>

<br>
<p><b>Subtask 1 (30 marks)</b> : 1 ≤ <em>N</em> ≤ 5000.</p>
<p><b>Subtask 2 (70 marks)</b> : 1 ≤ <em>N</em> ≤ 5×10^5.</p>


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>