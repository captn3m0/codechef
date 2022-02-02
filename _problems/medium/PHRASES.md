---
{"languages_supported":{"0":"NA"},"title":"PHRASES","category":"NA","old_version":true,"problem_code":"PHRASES","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>You are the King of Byteland. Your agents have just intercepted a batch of encrypted enemy messages concerning the date of the planned attack on your island. You immedietaly send for the Bytelandian Cryptographer, but he is currently busy eating popcorn and claims that he may only decrypt the most important part of the text (since the rest would be a waste of his time). You decide to select the fragment of the text which the enemy has strongly emphasised, evidently regarding it as the most important. So, you are looking for a fragment of text which appears in all the messages disjointly at least twice. Since you are not overfond of the cryptographer, try to make this fragment as long as possible.
<h3>Input</h3>
</p><p>
The first line of input contains a single positive integer t&lt;=10, the number of test cases. t test cases follow.

Each test case begins with integer n (n&lt;=10), the number of messages. The next n lines contain the messages, consisting only of between 2 and 10000 characters 'a'-'z', possibly with some additional trailing white space which should be ignored.

<h3>Output</h3>
</p><p>For each test case output the length of longest string which appears disjointly at least twice in all of the messages.

<h3>Example</h3>

<pre>
<b>Input:</b>
1
4
abbabba
dabddkababa
bacaba
baba

<b>Output:</b>
2
</pre>
</p><p>
(in the example above, the longest substring which fulfills the requirements is 'ba')</p>    