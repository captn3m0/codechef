---
{"languages_supported":{"0":"NA"},"title":"GROUPING","category":"NA","old_version":true,"problem_code":"GROUPING","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p> The Chef's last idea was that some cooks might work better in pairs. But now he thinks that it is better to form one group of Chefs in order to make larger increase of foods quality. All pairs of employees in this group must be compatible. We call such group friendly. Chef provides you the list of compatible pairs of employees. Also for each employee, the Chef has assigned a number estimating how well the overall quality of the food might increase if this employee will be in the group. Strangely enough, the Chef estimates that picking the <b>i</b>'th employee in the group will increase the quality of food prepared in his kitchen by exactly <b>2<sup>c<sub>i</sub></sup></b> where <b> c<sub>i</sub></b> are nonnegative integer. Also note that Chef has assigned different numbers for his employees. Chef doesn't want to form just one friendly group of employees that make the largest increase of food quality. He wants to have several possibilities of such groups. Namely he wants to know <b>K</b> best friendly groups by the value of increase of food quality. Note that Chef considers only non-empty groups. Help him to find these groups. </p> 

<h3>Input</h3>

<p> The first line contains a single integer <b>T</b> denoting the number of test cases (at most <b>20</b>). Each test case begins with three integers <b>N</b>, <b>M</b> and <b>K</b>. Here, <b>N</b> is the number of employees (between <b>1</b> and <b>10000</b>), <b>M</b> is the number of compatible pairs of employees (between <b>0</b> and <b>20000</b>) and <b>K</b> is the number of friendly groups that you need to find (between <b>1</b> and <b>50</b>). The employees are numbered from <b>0</b> to <b>N-1</b>. The next line contains <b>N</b> integers <b> c<sub>0</sub>, c<sub>1</sub>, ..., c<sub>N-1</sub> </b> described in the problem statement. These numbers are different non-negative integers not greater than <b>10<sup>9</sup></b>. The next <b>M</b> lines describe pairs of compatible employees, one per line. The <b>i</b>'th such line contains two distinct integers <b>u<sub>i</sub>, v<sub>i</sub></b> between <b>0</b> and <b>N-1</b>. </p>

<p> No pair of employees will be given more than once in the input. That is, for distinct indices <b>i</b> and <b>j</b>, we do not have both <b>u<sub>i</sub> = u<sub>j</sub></b> and <b>v<sub>i</sub> = v<sub>j</sub></b>, nor do we have both <b>u<sub>i</sub> = v<sub>j</sub></b> and <b>v<sub>i</sub> = u<sub>j</sub></b>. </p>

<h3>Output</h3>

<p> The output for each test case consists of <b>K+1</b> lines. Each of the first <b>K</b> lines consists of the employees indices that are used in <b>i</b>'th maximum total value grouping where <b>i</b> is the number of line. These indices should be given in increasing order with a single space between consecutive numbers. Last line of the output of each test case must be blank. It is guaranteed that there exist at least <b>K</b> different friendly groups. If there is more than one possible output, then any will do. </p>

<h3>Example</h3>

<pre>
<b>Input:</b>
2
4 5 11
4 2 3 1
0 1
0 2
1 2
2 3
3 1
1 0 1
1000000000

<b>Output:</b>
0 1 2
0 2
0 1
0
1 2 3
1 2
2 3
2
1 3
1
3

0

</pre>    