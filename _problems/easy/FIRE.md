---
{"languages_supported":{"0":"NA"},"title":"FIRE","category":"NA","old_version":true,"problem_code":"FIRE","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
Help! A brush fire has started near your house and you are the only one who can help extinguish it. The only tool you have at your disposal is a single fireproof barrier that can protect one bush at a time, provided the bush has not yet caught fire already. For simplicity, we will assume the flames spread according to the following discrete time model.

</p><p>
Initially, a single bush, say <i>s</i>, is on fire. You choose a bush, say <i>k</i>, to save. The flames then leap from <i>s</i> to every bush near <i>s</i> with the exception of bush <i>k</i> if it was near <i>s</i>. Say these new burning bushes form a set <i>B</i>. Bush <i>s</i> is then reduced to ashes and will never burn again. Now that the bushes in <i>B</i> are on fire, you may move the protective barrier from bush <i>k</i> to some other bush <i>k'</i>. The flames leap from bushes in <i>B</i> to every bush that has not yet burned (<i>i.e.</i> not <i>s</i> or in <i>B</i>) and is close enough to some bush in <i>B</i> except, perhaps, bush <i>k'</i>. Say this new set of burning bushes is <i>B'</i>.
The bushes in set <i>B</i> are reduced to ashes and will never burn again. Now, you may move the protective barrier from <i>k'</i> to another bush to protect it from the flames that will spread from bushes in <i>B'</i> and so on. This process repeats until there are no more bushes on fire.

</p><p>
The bushes are arranged in a peculiar manner. Before the fire started, each bush was close enough to spread a fire to at most three other bushes. Moreover, the bush that was initially on fire is actually close enough to only at most two other bushes. It is understood that for any two bushes A and B, if bush A is close enough to bush B then bush B is also close enough to bush A. Finally, the graph underlying the "close enough" relation has no cycles.

</p><p>
For whatever reason, some of the bushes hold some sentimental value to you. For this reason, you want to save all of these bushes.

<h3>Input</h3>
</p><p>
The first line of the input contains a single integer T &le; 40 indicating the number of test cases that will follow. Each test case begins with three integers <i>n</i>, <i>s</i>, and <i>t</i> satisfying 1 ≤ <i>n</i> ≤ 10,000 and both <i>s</i> and <i>t</i> are between 1 and <i>n</i>. Here, <i>n</i> is the number of bushes (indexed from 1 to <i>n</i>), <i>s</i> is the index of the bush that is initially on fire, and <i>t</i> is the number of bushes you want to save.

</p><p>
Following this, there are <i>n</i> lines describing the "close enough" relation. The <i>i</i>'th line starts with an integer 0 ≤ <i>c<sub>i</sub></i> ≤ 3 meaning bush <i>i</i> is close enough to <i>c<sub>i</sub></i> other bushes. The remaining <i>c<sub>i</sub></i> integers on this line are the indices of the bushes that bush <i>i</i> is close to. As mentioned earlier, the input will be such that if bush <i>i</i> is close enough to bush <i>j</i>, then bush <i>j</i> is also close enough to bush <i>i</i>. Finally, we also guarantee that <i>c<sub>s</sub></i> ≤ 2.

</p><p>
The last line of input for each test case consists of <i>t</i> distinct integers between 1 and <i>n</i>. These correspond to indices of bushes you want to save.

</p><p>
Test cases are separated by a single blank line (including a blank line preceding the first test case).

<h3>Output</h3>
</p><p>
For each test case, you are to output a single line consisting of either "yes" or "no", depending on whether or not it is possible to save all of the indicated bushes.


<h3>Example</h3>

<pre>
<b>Input:</b>

3

3 1 2
2 2 3
1 1
1 1
2 3

3 1 1
2 2 3
1 1
1 1
2

7 1 3
2 2 3
3 1 4 5
3 1 6 7
1 2
1 2
1 3
1 3
4 5 7

<b>Output:</b>

no
yes
yes
</pre></p>    