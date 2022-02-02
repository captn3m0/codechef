---
{"languages_supported":{"0":"NA"},"title":"SUBANAGR","category":"NA","old_version":true,"problem_code":"SUBANAGR","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Let's start from some definitions.

</p><p>Strings <b>A</b> and <b>B</b> are called <i>anagrams</i> if it's possible to rearrange the letters of string <b>A</b> using all the original letters exactly once and achieve string <b>B</b>; in other words <b>A</b> and <b>B</b> are permutations of each other. For example, <i>remote</i> and <i>meteor</i> are anagrams, <i>race</i> and <i>race</i> are anagrams as well, while <i>seat</i> and <i>tease</i> aren't anagrams as <i>tease</i> contains an extra <i>'e'</i>.

</p><p>String <b>A</b> is called a <i>subsequence</i> of string <b>B</b> if <b>A</b> can be obtained from <b>B</b> by removing some (possibly none) characters. For example, <i>cat</i> is a subsequence of <i>scratch</i>, <i>rage</i> is a subsequence of <i>rage</i>, and <i>tame</i> is not a subsequence of <i>steam</i>.

</p><p>String <b>A</b> is <i>lexicographically smaller</i> than string <b>B</b> of the same length if at the first position where <b>A</b> and <b>B</b> differ <b>A</b> contains a letter which is earlier in the alphabet than the corresponding letter in <b>B</b>.

</p><p>Recently, Ann received a set of strings consisting of small Latin letters <i>a</i>..<i>z</i>. 'What can I do with them?' -- she asked herself. 'What if I try to find the longest string which is a subsequence of every string from the set?'. Ann spent a lot of time trying to solve the problem... but all her attempts happened to be unsuccessful. She then decided to allow the sought string to be an anagram of some subsequence of every string from the set. This problem seemed to be easier to Ann, but she was too tired to solve it, so Ann asked for your help.

</p><p>So your task is, given a set of strings, to find the longest non-empty string which satisfies Ann. Moreover, if there are many such strings, choose the lexicographically smallest one.

<h3>Input</h3>
</p><p>The first line of the input file contains one integer <b>N</b> -- the number of strings in the set (1 ≤ <b>N</b> ≤ 100). Each of the next <b>N</b> lines contains a non-empty string consisting only of small Latin letters <i>a</i>..<i>z</i> representing a string from the set. None of the strings contain more than 100 letters.

<h3>Output</h3>
</p><p>Output the longest non-empty string satisfying Ann. If there are several such strings, output the lexicographically smallest one. If there are no such strings, output '<b>no such string</b>' (quotes for clarity).

<h3>Example</h3>

<pre>
<b>Input:</b>
3
hope
elephant
path

<b>Output:</b>
hp

<b>Input:</b>
2
wall
step

<b>Output:</b>
no such string

<b>Explanation:</b>
</pre>
In the first test case the longest string appears to be two characters long. String 'hp' satisfies the requirements as it's an anagram of 'hp' which is a subsequence of 'hope' and an anagram of 'ph' which is a subsequence of both 'elephant' and 'path'. Note that string 'ph' also satisfies the requirements, but 'hp' is lexicographically smaller.<br />

<br /></p><p>In the second test case there is no such string.</p>    