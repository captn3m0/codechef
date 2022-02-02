---
{"languages_supported":{"0":"NA"},"title":"TOOLS","category":"NA","old_version":true,"problem_code":"TOOLS","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Like any good boss, the Chef has delegated all cooking jobs to his employees so he can take care of other tasks. Occasionally, one of the cooks needs a tool that is out of reach. In some of these cases, the cook cannot leave their workstation to get the tool because they have to closely watch their food. In such cases, the Chef simply fetches the tool for the cook.</p>
<p>Unfortunately, many different cooks have simultaneously requested a tool they cannot reach. Thankfully, no two cooks requested the same tool. Nobody else is available to help the Chef so he has to deliver all of the tools himself. He has to plan a trip around the kitchen in such a way that he picks up each tool and delivers it to the requesting cook. Since the Chef has two hands, he may carry up to two tools at once.</p>
<p>Once the last item has been delivered, the Chef also has to return to his starting position. This must be done as fast as possible so the Chef wants to do this while traveling the minimum possible distance.</p>
<h3>Input</h3>
<p>The first line contains a single integer T ≤    20 indicating the number of test cases. Each test case begins with a single integer n, between 1 and 8, indicating the number of requests being made. The following n lines describe the locations of cooks and the tools they request. The i'th such line begins with two integers c<sub>x</sub>,c<sub>y</sub> describing the location of the cook and ends with two more integers t<sub>x</sub>,t<sub>y</sub> describing the location of the corresponding requested tool. No tool will be located at the same location as the cook who requests it.</p>
<p>The values c<sub>x</sub>, c<sub>y</sub>, t<sub>x</sub>, and t<sub>y</sub> corresponding to any cook or tool will always lie between 0 and 1000 (inclusive). Finally, the kitchen is laid out into square workstations on a grid so the distance between two points x,y and x',y' is precisely their Manhattan distance |x-x'| + |y-y'|.</p>
<h3>Output</h3>
<p>The output for each test case consists of a single line. This line should display a single integer indicating the minimum distance the Chef must travel to deliver the tools to the cooks and return to his start location 0,0. Of course, he may only deliver a tool to a cook if he has already picked up the tool and he may not carry more than two tools at a time.</p>
<h3>Example</h3>
<pre><b>Input:</b>
3
2
1 0 0 1
0 0 1 1
3
0 3 0 1
0 4 0 2
0 5 0 3
3
0 1 0 2
0 1 0 2
0 1 0 2

<b>Output:</b>
4
10
6
</pre>
<h3>Notes</h3>
<p>In the second case, the Chef dropped of the first tool to the first cook and then picked up the tool for the third cook.</p>
<p>In the last test case, there are three different cooks requesting three different tools. It just so happens that all three tools are at the same location. Still, the Chef can only carry two of the tools from this location at once.</p>    