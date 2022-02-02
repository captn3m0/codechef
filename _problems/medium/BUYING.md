---
{"languages_supported":{"0":"NA"},"title":"BUYING","category":"NA","old_version":true,"problem_code":"BUYING","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Emily is coming back from her two-week vacation at the other continent. But when Emily arrived at the airport, she realized that she had got no presents for her <b>K</b> friends! She still had some time before her flight, so she went for a walk around the airport hoping to find something suitable.

</p><p>Soon Emily found a candy store and decided to buy some of her favorite candies for her friends. The store offers <b>N</b> packs of these candies, where pack <b>i</b> contains <b>A<sub>i</sub></b> candies.

</p><p>Another reason Emily decided to buy candies is that she is fond of collecting empty candy packs from various parts of the world. That's why she decided to buy exactly <b>M</b> packs and present the friends with the candies and keep the packs for her collection. Emily would also like the total number of candies to be divisible by <b>K</b> so that an equal distribution of candies between friends is possible. Among all possible sets of packs, she would like to buy a set with the smallest possible total number of candies (money is the reason).

</p><p>Your task is to help Emily, of course.

<h3>Input</h3>
</p><p>The first line of the input file contains an integer <b>T</b> -- the number of test cases (no more than 5). <b>T</b> test cases follow, and each test case consists of two lines. The first of them contains three integers <b>N</b>, <b>M</b> and <b>K</b> (1 ≤ <b>M</b> ≤ <b>N</b> ≤ 50000, 1 ≤ <b>K</b> ≤ 20). The second of them contains <b>N</b> integers <b>A<sub>i</sub></b> (1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>9</sup>).

<h3>Output</h3>
</p><p>For each test case, output just one line containing the smallest possible total number of bought candies, or <b>-1</b> if it's impossible to buy exactly <b>M</b> packs so that the total number of candies is divisible by <b>K</b>.

<h3>Example</h3>

<pre>
<b>Input:</b>
2
5 3 5
1 2 3 4 5
6 3 4
9 5 1 7 3 7

<b>Output:</b>
10
-1

<b>Explanation:</b>
</pre>
</p><p>In the first test case, it's impossible to buy one candy per friend as three smallest packs contain 6 candies all together. Two candies per friend is possible though -- for example, if you buy packs with 1, 4 and 5 candies.

</p><p>In the second test case, buying 3 packs implies buying an odd number of candies, which is impossible to distribute equally among 4 friends.</p>    