---
{"category_name":"hard","problem_code":"STREETTA","problem_name":"The Street ","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"tuananh93","problem_tester":null,"date_added":"24-01-2014","tags":{"0":"march14","1":"medium","2":"segment","3":"tuananh93"},"editorial_url":"http://discuss.codechef.com/problems/STREETTA","time":{"view_start_date":1395135000,"submit_start_date":1395135000,"visible_start_date":1395135000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/mandarin/STREETTA.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/russian/STREETTA.pdf">Russian</a>.</h3>
<p>The String street is known as the busiest street in Codeland.<br />
Tourists from all over the world want to visit the street once they are in Codeland.<br />
The Chef owns <b>N</b> souvenir stores across the street (numbered from <b>1</b> to <b>N</b>).<br />
At the beginning there is no souvenir in any store, the Chef has some plans to add some new items.<br />
Each the Chef's plan is represented by 4 numbers: <b>u v a b</b> which mean an items with price <b>b</b><br />
is added to the store <b>u</b>, an items with price <b>a + b</b> is added to the store <b>u + 1</b> and so on.<br />
More formally, an item with price <b>a * i + b</b> is added to the store <b>u + i</b> for all (<b>0 ≤ i ≤ v - u</b>).</p>
<p>In additional to the cost of the item itself, the tourist must pay some conservation fees as well.<br />
The Codeland regularly defines the new conservation fee. Each fee is represented by 4 numbers: <b>u v a b</b> which means<br />
the tourist buying any item in the store <b>u + i</b> will be charged a fee of <b>i * a + b</b> for all (<b>0 ≤ i ≤ v - u</b>).<br />
In the case that several conservation fees have effect on the same store, the customer needs to pay all of those fees.</p>
<p>At some point of time, a tourist at store <b>i</b> asks you what is the <b>largest</b> amount of money they have to spend for<br />
a souvenir at that store (the amount of money includes the price of one of the souvenirs and all the conservation fees for that store).</p>
<p> </p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains two integers <b>N</b> and <b>M</b> represent the number of stores and the number of events</li>
<li>Each of the next <b>M</b> lines represents an event of three types below in the chronological order.
<ul>
<li>The new plan of the Chef: "1 <b>u v a b</b>".</li>
<li>The new conservation fee: "2 <b>u v a b</b>".</li>
<li>The query from tourist: "3 <b>i</b>".</li>
</ul>
</li>
</ul>
<p> </p>
<h3>Output</h3>
<p>For each query from tourist, print in one line the corresponding answer.<br />
If there is no item at the <b>i</b>th store, print out "NA" (without quotes) as the answer.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>3*10<sup>5</sup></b></li>
<li>For events of type 1: <b>1</b> ≤ <b>u</b> ≤ <b>v</b> ≤ <b>N</b>. <b>|a|, |b| ≤ 10<sup>9</sup></b></li>
<li>For events of type 2: <b>1</b> ≤ <b>u</b> ≤ <b>v</b> ≤ <b>N</b>. <b>|a|, |b| ≤ 10<sup>4</sup></b></li>
<li>For events of type 3: <b>1</b> ≤ <b>i</b> ≤ <b>N</b> 
</li></ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
10 10
3 5
1 3 8 3 1
3 5
1 5 10 -8 2
3 5
3 10
2 1 10 0 1
3 6
2 5 7 2 1
3 6

<b>Output:</b>
NA
7
7
-38
11
14
</pre><h3>Explanation</h3>
<ul>
<li>
At the beginning all stores are empty so the answer for the first query which asks about the store 5 is "NA".
</li>
<li>
The first plan of the Chef is "3 8 3 1" which means the items with price 1, 4, 7, 10, 13, 16 are added to the stores 3, 4, 5, ..., 8 correspondingly. So in the next query (asking about store 5) the answer is 7 (we have only one item to buy with no conservation fee).
</li>
<li>
The second plan of the Chef is "5 10 -8 2" so the items with price 2, -6, -14, -22, -30, -38 are added to the stores 5, 6, 7, ..., 10 correspondingly. Now the store 5 now contains two items with the corresponding prices are 7 and 2, the answer for the query about store 5 is still 7 (we still don't have any conservation fee). The store 10 contain only one item with price is -38 so the answer for the query about this store is -38.
</li>
<li>
The first conservation fee policy is "1 10 0 1" which cause a conservation fee of 1 for each of 10 stores. The stores 6 contains 2 items, one costs 10 unit of money and the other costs -6. We need to pay 1 unit of money for the conservation fee so the largest amount of money we can spend for one item in store 6 is 10 + 1 = 11.
</li>
<li>
The second conservation fee policy is "5 7 2 1" so a conservation fees of 1, 3, 5 are added to the stores 5, 6 and 7 correspondingly. Hence the largest amount of money we can spend for one item in store 6 is increased by 3. The answer for the last query is 14.
</li>
</ul>
<p><b>Note: </b>Both of the price and the conservation fee can be negative.</p>
