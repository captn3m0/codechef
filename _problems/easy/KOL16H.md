---
{"category_name":"easy","problem_code":"KOL16H","problem_name":"Mr Wireless","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.4"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kol_adm","problem_tester":null,"date_added":"21-12-2016","tags":{"0":"kol_adm"},"time":{"view_start_date":1482831600,"submit_start_date":1482831600,"visible_start_date":1482831600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Mr. Wire Less is not that good at implementing circuit in a breadboard. In his Digital Logic Design course, he has to implement several boolean functions using the breadboard. In a breadboard, inputs are given through the switches and outputs are taken through the LEDs. Each input switch can be either in ground state or in high state. So, if he wishes to implement a boolean function, <b>f(x<sub>1</sub>, x<sub>2</sub>, .., x<sub>n</sub>)</b> that takes <b>n</b> boolean values as input and returns <b>m</b> boolean values as output, he will use <b>n</b> switches and <b>m</b> LEDs. </p>

<p>Mr. Wire Less can quickly assemble the necessary ICs and wires, but the key problem is testing. While testing he has to check with all possible input combination, to make sure whether the output of LED corresponds to the expected output or not. This is taking too long for him, as most of the switches are jammed and difficult to toggle. </p>

<p>Mr. Wire Less is asking for help to minimize his time of testing. So, your task is to minimize the total number of switch-toggle throughout the testing.</p>

<p>For example, if Mr. Wire Less has to test a function <b>f(x0, x1)</b> of two variables, he may choose this switching-sequence for testing <b>00, 11, 10, 01</b>. In this case, the total number of switch-toggle will be <b>2+1+2 = 5</b>. But if he tests in this sequence <b>00, 10, 11, 01</b> total number of toggle will be <b>1+1+1 = 3</b>.</p>

<p>Given <b>n</b>, you have to output the minimum number of toggle needed for complete testing. Though it seems impractical, he wants you to solve the problem for a very large value of <b>n</b>. But, then the toggle value can be quite big. So, he is completely okay with the toggle value modulo <b>8589934592 (2<sup>33</sup>)</b>.</p>  <h3>Input</h3>
<p>The first line of the input contains a positive integer <b>T(T ≤ 10<sup>5</sup>)</b>, denoting the number of test-case. Each of the following <b>T</b> lines contains a single non-negative integer <b>n(n ≤ 10<sup>20</sup>)</b>.<p>

<h3>Output</h3>
<p>For every test-case, output a single containing test-case number and the minimum number of switch-toggle modulo <b>8589934592 (2<sup>33</sup>)</b>.</p>


<h3>Sample</h3> <pre><b>Input</b>   
2
1
2

<b>Output</b>
Case 1: 1
Case 2: 3
</p></pre>

