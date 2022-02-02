---
{"category_name":"easy","problem_code":"MAXCOMP","problem_name":"Event Organizer","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"khadarbasha","problem_tester":"anton_lunyov","date_added":"31-05-2012","tags":{"0":"khadarbasha","1":"oct12","2":"simple"},"editorial_url":"http://discuss.codechef.com/problems/MAXCOMP","time":{"view_start_date":1350293400,"submit_start_date":1350293400,"visible_start_date":1350293400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Chef Po has given an online advertisement to provide <b>Event organizing services</b>. Chef got a huge response for his advertisement. He got various orders to conduct the events from different organizations. In turn, Chef will receive a compensation depend upon the type of event and the total numbers of persons in the event. Chef has received <b>N</b> orders for conducting events in this weekend in all. As weekend consists of two days all events will take place during the period of <b>48</b> hours. For the <b>i</b>-th order the corresponding event will start at <b>S<sub>i</sub></b> hours, ends at <b>E<sub>i</sub></b> hours and Chef will receive a compensation <b>C<sub>i</sub></b> for this event. For example, if <b>S<sub>i</sub> = 17</b> and <b>E<sub>i</sub> = 22</b> then duration of event is <b>22 &ndash; 17 = 5</b> hours and its time period is <b>17:00 &ndash; 22:00</b> of Saturday. Hours of Sunday are numbered by numbers from <b>24</b> to <b>48</b>. So, for example, <b>10:00</b> of Sunday will be represented as <b>10 + 24 = 34</b>. Because Chef is a newbie, the organizations had put a condition that Chef will receive a compensation for the event if and only if he is available for the entire duration of the event. It means that he can not choose overlapping events. Note, however, that if some event starts just in the moment another event has finished the Chef can safely conduct them both.
</p>

<p>
In general Chef will obey the orders on first come first serve basis. But on weekends Chef will select the orders in such a way that the total compensation for all the events he will conduct will be the maximal. Now your task is to help Chef and find this maximal total compensation.
</p>

<h3>Input</h3>

<p>
The first line of the input contains an integer <b>T</b>, the number of test cases. <b>T</b> test cases follow. The first line of each test case contains an integer <b>N</b>, the number of received orders for conducting events. Each of the next <b>N</b> lines contains three space separated integers <b>S<sub>i</sub></b>, <b>E<sub>i</sub></b>, <b>C<sub>i</sub></b>, the parameters of the <b>i</b>-th event described in the problem statement.
</p>

<h3>Constraints</h3>

<p>
<b>1 &le; T &le; 10</b><br />
<b>1 &le; N &le; 2000</b><br />
<b>0 &le; S<sub>i</sub> &lt; E<sub>i</sub> &le; 48</b><br />
<b>0 &le; C<sub>i</sub> &le; 10<sup>6</sup></b>
</p>

<h3>Output</h3>
<p>
Output for each test case should contain a single integer in a separate line, the maximal compensation Chef Po can get.
</p>

<h3>Example</h3>

<pre>
<b>Input:</b>
2
4
1 2 100
2 3 200
3 4 1600
1 3 2100
3
1 10 2000
2 5 100
6 9 400

<b>Output:</b>
3700
2000
</pre>

<h3>Explanation</h3>

<p>
<b>Case 1.</b> The best choice here is to conduct <b>3</b>rd and <b>4</b>th events. The total compensation is equal to <b>1600 + 2100 = 3700</b>. These events do not overlap since <b>3</b>rd event starts just after the finish of the <b>4</b>th one. Alternatively we can conduct first three events that also do not overlap. But in this case compensation will be only <b>100 + 200 + 1600 = 1900</b>.
</p>

<p>
<b>Case 2.</b> Note that first event overlaps with both second and third events, while the last two events do not overlap. Hence there are two reasonable choices available for Chef. One is to take just the first order with total compensation <b>2000</b> and the second one is to take the last two orders with total compensation <b>100 + 400 = 500</b>. Clearly the first choice is better. Hence the answer is <b>2000</b>.
</p>