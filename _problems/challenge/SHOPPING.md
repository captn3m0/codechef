---
{"category_name":"challenge","problem_code":"SHOPPING","problem_name":"Shopping","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"SCALA","15":"D","16":"PERL","17":"FORT","18":"WSPC","19":"ADA","20":"CAML","21":"ICK","22":"BF","23":"ASM","24":"CLPS","25":"PRLG","26":"ICON","27":"SCM qobi","28":"PIKE","29":"ST","30":"NICE","31":"LUA","32":"BASH","33":"NEM","34":"LISP sbcl","35":"LISP clisp","36":"SCM guile","37":"JS","38":"ERL","39":"TCL","40":"PERL6","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"kevinsogo","date_added":"6-03-2015","tags":{"0":"ad","1":"challenge","2":"may15","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/SHOPPING","time":{"view_start_date":1431941400,"submit_start_date":1431941400,"visible_start_date":1431941400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY15/mandarin/SHOPPING.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY15/russian/SHOPPING.pdf">Russian</a>.</h3>


<p><i>This is an interactive problem. Please refer to "Interactivity details" section in order to get acquainted with the IO format. Good luck!</i></p>

<p>About two years ago, Sergey has bought a wallet. Since then, he's constantly facing kind of difficulty, when he pays for something.</p>

<p>The main reason is that the wallet doesn't have much sections in it, but Sergey, trying to be neat, always wants to keep his money in the sorted order. For example, he doesn't want to put the 50,000 burles bank note between two 100,000 burles bank notes. So, any time he gets the change, he finds the appropriate place in the wallet for each bank note, that might be very slow and irritating for both the cashier and for the next person in the queue, and our protagonist does not like it. Now it is time to change something!</p>

<p>Of course, he could just order a credit card or more spacious wallet, but as the person who loves adventures, Sergey has decided to go another way.</p>

<p>Now, in Sergey's country, there are <b>N</b> types of bank notes. The smallest bank note's value is <b>1</b> burle. The value of the bank note of the <b>i</b>-th type is <b>V<sub>i</sub></b> burles. Initially, Sergey has <b>A<sub>i</sub></b> bank notes of the value of <b>V<sub>i</sub></b>.</p>

<p>Our protagonist plans all the purchases very well. For every his visit to the shop, he'll know the amount of money he's going to spend and will report it to you, right before the visit to this shop. The purchase proceeds in the following way: 
<ul>
<li>First, Sergey gives some amount of money to the cashier. This amount should not be less than the value of the purchase (obviously). Of course, Sergey is free to choose the way he'll collect the amount he's going to give, for example he can give 100,000 burles as one bank note of 100,000 burles, or he can use 1,000 bank notes of the value of 100 burles, or he can use 500 bank notes of the value of 100 burles and one bank note of the valie of 50,000 burles, etc. It will always be possible to give the amount, not less that the required.</li>
<li>Then the cashier gives the change according to the following algorithm: first she gives as much bank notes of the largest value as possible in such a way that the given amount doesn't exceed the value of change, then she gives as much bank notes of the second largest value as possible in such a way that the given amount (considering previously given bank notes of the largest value, as well) doesn't exceed the amount of the change, and so on. Cashiers are provided with infinite number of bank notes of each type, and Sergey knows it well. In other words, cashiers collect the change greedily. Since there is a bank note of the value of <b>1</b>, this algorithm will always be enough to collect the change correctly.</li>
</ul></p>

<p>Then, as the time goes, Sergey receives some more money. It can be a scholarship (he's a student), or anything else. Sergey knows the amount of money he's going to get any of these times. For getting it, there are a few ATMs in the city. The ATMs are not as good as cashiers, so each of them has infinite supply of some set of bank notes, but, possibly, not all the kinds. So each time, Sergey receives some money, he chooses the ATM where he wants to get it, and gets the whole amount from the specified ATM. Nevertheless, all the ATMs has supply of the bank note of the value of <b>1</b>, so it's possible to receive the required amount of money from any of them. It needs to be pointed out that when Sergey receives some money, he collects it from the chosen ATM immediately. The ATMs work the same way as the cashiers when collect a change.</p>

<p>Sometimes, new bank notes are issued by Sergey's country National Bank. Sergey will provide you the information about such events as well. You can consider that after the new bank note is introduced, all the shops has infinite supply of this bank note immediately.</p>

<p>Finally, some new ATMs might also be built. For each of them, the list of present bank notes will be given. Sergey explored the bank's website and gathered all the information about the new ATMs.</p>

<p>Now, Sergey asks you to develop the strategy of how much money he needs to give, and using which bank notes; and which ATMs to use in order to minimize the total amount of bank notes that will be given to him as a change.</p>

<h3>Test data information</h3>
<p>There are 20 test cases in total. The test cases are separated in 5 groups:
<ul>
<li>Group <b>1</b>: <b>1</b> ≤ <b>E</b> ≤ <b>100</b>, <b>1</b> ≤ <b>V<sub>i</sub></b> ≤ <b>1000</b>. Moreover, you can assume that Sergey will neither spend nor receive more than <b>1000</b> burles at once.</li>
<li>Group <b>2</b>: <b>1</b> ≤ <b>E</b> ≤ <b>1000</b>, <b>1</b> ≤ <b>V<sub>i</sub></b> ≤ <b>1000</b>, you can assume that Sergey will neither spend nor receive more than <b>10<sup>6</sup></b> burles at once.</li>
<li>Group <b>3</b>: <b>1</b> ≤ <b>E</b> ≤ <b>100</b>, <b>1</b> ≤ <b>V<sub>i</sub></b> ≤ <b>10<sup>6</sup></b>, you can assume that Sergey will neither spend nor receive more than <b>10<sup>8</sup></b> burles at once.</li>

<li>Group <b>4</b>: <b>1</b> ≤ <b>E</b> ≤ <b>1000</b>, <b>1</b> ≤ <b>V<sub>i</sub></b> ≤ <b>10<sup>6</sup></b>, you can assume that Sergey will neither spend nor receive more than <b>4 * 10<sup>8</sup></b> burles at once.</li>

<li>Group <b>5</b>: <b>1</b> ≤ <b>E</b> ≤ <b>10<sup>4</sup></b>, <b>1</b> ≤ <b>V<sub>i</sub></b> ≤ <b>10<sup>6</sup></b>, you can assume that Sergey will neither spend nor receive more than <b>10<sup>9</sup></b> burles at once.</li>

</ul>
Each group consists of <b>4</b> test cases.
</p>
<p>
Moreover, the following will be held in all the test cases:
<ul>
<li><b>0</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>4</sup></b></li>

<li><b>1</b> ≤ <b>N</b>, <b>M</b> ≤ <b>20</b></li>

<li>At the end of all the operations, there will be no more than <b>61</b> different bank notes' values and no more than <b>61</b> ATMs.</li>

</ul>
</p>

<p>
During the contest, you will only see the score on the following test set (that is 20% of the test data):
<ul>
<li>One test case from the first group.</li>
<li>One test case from the second group.</li>
<li>One test case from the third group.</li>
<li>One test case from the fourth group.</li>
</ul>
The problem will be rejudged on the full test set after the end of the competition.
</p>

<p>The score is the total amount of bank notes that will be given to Sergey by cashiers as a change. You need to minimize it.</p>

<h3>Input</h3>
<p>The first line of input contains two space separated integers <b>N</b> and <b>M</b> denoting the number of the bank notes' values and the number of ATMs respectively.</p>

<p>The second line contains <b>N</b> space separated integers <b>V<sub>1</sub></b>, <b>V<sub>2</sub></b>, ..., <b>V<sub>N</sub></b> denoting the values of bank notes.</p>

<p>The third line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b>, where <b>A<sub>i</sub></b> denotes the amount of bank notes of the value of <b>V<sub>i</sub></b> that Sergey has initially.</p>

<p>Then, there are <b>M</b> lines. Each of these lines describes a single ATM, in the following format:
<ul>
<li>First, there is an integer <b>K<sub>j</sub></b>, denoting the amount of different bank notes' values in this ATM.</li>
<li>Then, there are <b>K<sub>j</sub></b> integers, denotes the bank notes' values, available in this ATM. You can safely assume that there won't appear a non-existing value of a bank note.</li>
</ul>
</p>

<p>The next line contains a single integer <b>E</b>, denoting the number of events. The following <b>E</b> lines denote the events in the chronological order.</p>

<p>The event will be described in one of the following ways:
<ul>
<li><b>Pay X</b>. Means that Sergey makes a purchase with the value of <b>X</b> burles.</li>
<li><b>Receive X</b>. Means that Sergey receives <b>X</b> burles.</li>
<li><b>Banknote X</b>. Means that the new bank note of the value <b>X</b> burles is introduced.</li>
<li><b>ATM P Q<sub>1</sub> Q<sub>2</sub> ... Q<sub>P</sub></b>. Means that the new ATM that has infinite supply of the bank notes of the values of <b>Q<sub>1</sub>, Q<sub>2</sub>, ..., Q<sub>P</sub></b> is built and can be used.</li>
</ul>
</p>

<h3>Output</h3>
<p>For each "Pay" and "Receive" event, output a single line containing:
<ul>
<li>For each "Pay" event, output the way Sergey should collect money in order to make a purchase. Output <b>N'</b> integer numbers, where <b>N'</b> does stand for the current number of different bank notes' values in Sergey's country. The <b>i</b>-th integer in the output should contain the number of the bank notes on the <b>i</b>-th smallest value that should be paid to the cashier.</li>
<li>For each "Receive" event, output a single integer, denoting the ID of the ATM that Sergey should use to receive his money. The ATMs get their IDs according to the following rules: the first <b>M</b> get IDs from <b>1</b> to <b>M</b> inclusively (in order they appear in the input), the added ATMs hold the IDs <b>M+1, M+2, ...</b> in order they're built.</li>
</ul>
Please don't use more than <b>2<sup>31</sup>-1</b> bank notes of any particular kind in any of your payments.
</p>

<h3>Interactivity details</h3>
<p>Like in the real life, you won't know everything in advance. So, you will get the information about the event only after you've answered the previous one.</p>

<p>Anytime you answer "Pay" or "Receive" query (namely, output anything), please flush output buffer. If you use C++, you can use the function <tt><b>fflush(stdout)</b></tt>. If you don't flush output buffer, your program won't get the information about the next queries correctly.</p>

<h3>Example</h3>
<pre><b>Input:</b>
5 2
1 5 20 50 100
5 4 3 2 1
2 1 50
3 1 20 100
5
Pay 112
Receive 573
Pay 9
Receive 846
Pay 576

<b>Output:</b>
0 0 0 1 1
1
0 0 0 1 0
1
0 0 0 12 0
</pre>
<p> </p>
