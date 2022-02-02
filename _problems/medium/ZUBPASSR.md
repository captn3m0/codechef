---
{"category_name":"medium","problem_code":"ZUBPASSR","problem_name":"E - Password Riddle","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"zubaerkh","problem_tester":null,"date_added":"7-11-2017","tags":{"0":"zubaerkh"},"time":{"view_start_date":1517085000,"submit_start_date":1517085000,"visible_start_date":1517085000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
<i>"What's your password, Ranju?"</i><br/>
<i>"one two three four"</i>, Ranju said
</p>

<p>
Do you think it's <i>1234</i>? No, it's not. As it turns out that Ranju has made a riddle with his password. It's actually <i>2444</i>. Clever, isn't it? It's one <i>2</i> and three <i>4</i>s. 
</p>

<p>
However, if we told Ranju to write down his password, he would write this - <i>"one two, three four."</i> Note that comma. It helps a lot, right? the comma separates two segments of the password. 
</p>

<p>
Let's formalize things a little. The rules Ranju made to describe a password (containing digits from <i>0-9</i> only) are:
<ul>
    <li>Ranju will use only the words <i>zero, one, two, three, four, five, six, seven, eight, nine, odd, even</i>. These are called <i>literal</i>s.</li>
	<li>He will also use <i>comma</i>s to separate the <i>segment</i>s and a <i>full stop</i> to mark the end.</li>
    <li>Each segment will consist of one <i>clause</i>. A clause can be either:
		<ul>
			<li>A literal followed by a clause. <i>or</i>,</li>
			<li>A literal.</li>
		</ul>
	<li>A literal matches with a digit/number as per following rules:
		<ul>
            <li><i>zero, one, two, ... , nine</i> match with <i>0, 1, 2, ... , 9</i> respectively.</li>
            <li><i>odd</i> matches with any of the </i>5</i> odd digits/numbers - <i>1, 3, 5, 7, 9</i></li>
            <li><i>even</i> matches with any of the <i>5</i> even digits/numbers - <i>0, 2, 4, 6, 8</i></li>
		</ul>
	<li>For a clause which has a literal followed by another clause, we call the literal <i>directive literal</i> and the following clause <i>child clause</i>. This kind of clause matches with the occurrence of the child clause a number of times directed by the directive literal. 
</ul>
</p>

<p>
Let's consider the clause <i>two odd three</i>. Here the directive literal is <i>two</i> and child clause is <i>odd three</i>. The child clause also has a directive literal(<i>odd</i>) and a child clause(<i>three</i>). the clause <i>odd three</i> matches with <i>3</i>, <i>333</i>, <i>33333</i>, etc. The clause <i>two odd three</i> matches with <i>33</i> (two occurrences of <i>3</i>), <i>333333</i> (two occurrences of <i>333</i>), etc. Note that it doesn't match with <i>3333</i> (the concatenation of <i>3</i> and <i>333</i>). The child clauses should be identical.
</p>

<p>
You will be given a password riddle and a password. Your job is to find out if it is possible to match the riddle with the password. You may assume that consecutive occurrences of the same digit in the password will <b>not</b> be described with more than one segments in the riddle. While matching the password, you are not required to use all of the segments (i.e. you can <b>skip</b> some segments. Please check the last sample test case for clarification).
</p>


<h3>Input</h3>
<ul>
<li>The first line of the input is the number of test cases, <b>T</b>. Description of each test case is given below.
</li>
<li>The first line contains the riddle. It may have several segments as described above. The last literal of each segment will be followed by a comma or a full stop (without any space). Please check the sample input.
</li>

<li>The second line contains an integer indicating the length of the password.</li> 

<li>The following line contains the password. The password has digits from <i>0</i> to <i>9</i> with no white space.
</li>
</ul>

<h3>Output</h3>
<p>For each testcase, print "Case i: ", and then the answer, where i is the testcase number, 1-indexed. The answer should be <b>"MAY BE"</b> (if it is possible to match the riddle with the password) or <b>"NO"</b> (if the password doesn't match). Don't print any quotation marks.</p> 

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ Number of segments in a riddle ≤ 100</li>
<li>1 ≤ Number of literals in a riddle ≤ 600000</li>
<li>1 ≤ Length of a password ≤ 600000</li>
<li>Length of a riddle won't exceed 2.5 * 10<sup>6</sup>.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
7
two odd three.
6
333333
two odd three.
4
3333
odd five, two three.
11
55555555533
one odd odd, zero six, five even, six.
9
111888886
four odd three, two two.
7
3333322
one four, one two.
2
24
one two, one five.
1
5

<b>Output:</b>
Case 1: MAY BE
Case 2: NO
Case 3: MAY BE
Case 4: MAY BE
Case 5: NO
Case 6: NO
Case 7: MAY BE
</pre>

<h3>Explanation</h3>
<p>
<b>Testcase 1</b> and <b>testcase 2</b> are described in the statement.
</p>
<p>
In <b>testcase 3</b>, there are nine <i>5</i>s and two <i>3</i>s which matches with the riddle.
</p>
<p>
In <b>testcase 4</b>, we can match the clause <i>odd odd</i> with three occurrences of <i>1</i>. Hence <i>one odd odd</i> matches with <i>111</i>. <i>zero six</i> matches with zero occurrences of <i>6</i> (we can skip the segment <i>zero six</i>). <i>five even</i> matches with <i>88888</i>. Finally, <i>six</i> matches with <i>6</i>.
</p>
<p>
In <b>testcase 5</b>, we cannot match the password with the riddle.
</p>
<p>
In <b>testcase 6</b>, the riddle doesn't match with the password. However, the riddle would match with <i>42</i>.
</p>
<p>
In <b>testcase 7</b>, we can skip the segment <i>one two</i> and match <i>one five</i> with <i>5</i>.
</p>
