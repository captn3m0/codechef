---
languages_supported:
    - NA
title: AEHASH
category: NA
old_version: true
problem_code: AEHASH
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Chef Ash and Chef Elsh invented a new hash function! Their hash function will map a binary string consisting of characters 'A' and 'E' into an integer called the hash value of the string.

The pseudocode of the hash function is as below. hash(S) is the hash value of a binary string S. |S| denotes the length of S.

<pre>function hash(S):
	result = number of characters 'A' in S
	if |S| > 1:
		(S1, S2) = split(S)
		result = result + max(hash(S1), hash(S2))
	end if
	return result
end function
</pre>
The function split in the above pseudocode takes a binary string S as the parameter and returns a pair of binary strings (S1, S2) such that:

- |S1| &lt;= |S2|.
- The difference of |S1| and |S2| is at most 1.
- The concatenation of S1 and S2 (in that order) is S.

For example, split("AAAEE") returns ("AA", "AEE"), whereas split("AEAEAE") returns ("AEA", "EAE").

You doubt that this hash function have good distribution of different hash values. So, you wonder how many different binary strings consisting of A 'A' characters and E 'E' characters that have hash value of V.

### Input

The first line contains a single integer T, the number of test cases. T test cases follow. Each testcase consists of a single line consisting of three integers A, E, and V.

### Output

For each test case, output a single line consisting the number of different binary strings satisfying the rule, modulo 1000000007.

### Constraints

- 1 ≤ T ≤ 1000
- 0 ≤ A ≤ 50
- 0 ≤ E ≤ 50
- 0 ≤ V ≤ 1000

### Example

<pre>
<b>Input:</b>
4
0 0 0
1 0 1
3 2 6
4 2 8

<b>Output:</b>
1
1
3
4
</pre>
### Explanation

For the last test case, the solutions are: - AAEAAE
- AEAAAE
- AAEAEA
- AEAAEA
