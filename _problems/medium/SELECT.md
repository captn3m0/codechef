---
category_name: medium
problem_code: SELECT
problem_name: 'Sebi and the black money'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: 'iscsi '
problem_tester: kevinsogo
date_added: 3-11-2016
tags:
    - backtracking
    - cook76
    - iscsi
    - medium
editorial_url: 'http://discuss.codechef.com/problems/SELECT'
time:
    view_start_date: 1479666600
    submit_start_date: 1479666600
    visible_start_date: 1479666600
    end_date: 1735669800
    current: 1493557974
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK76/mandarin/SELECT.pdf), [Russian](http://www.codechef.com/download/translated/COOK76/russian/SELECT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK76/vietnamese/SELECT.pdf) as well.

Each year during the election time, every politician in Chefland promises to bring black money back, but no concrete steps has yet been taken in this regard. The current government knows that many of its citizens store the illegal money in foreign banks through [Havala](https://en.wikipedia.org/wiki/Hawala_scandal). It contacted many banks and has gathered information about a total of 4000 such names. The government is under immense pressure to release the names, so its been decided that securing this information is very critical to not let it go into bad hands and is secured by a very strong encryption algorithm.

Sebi is a hacker and a vigilante who is adamant on making the names of the people with black money known to public. Being a hacker, he finds all of these 4000 encrypted names by exploiting a CSRF bug. Also, he has found the encryption algorithm used which is described below.

<pre>
<pre>
Let the string <b>S</b> represents the name of black money holder.
It consists of N lower case English Alphabets.

encrypt(S[0..N-1])
	W[0..N-1] = {0,..,0}
	for i=0 to N-1
		if S[i]'z' than 
			return "failure in encryption"
		for j=0 to N-1
			if S[i]>S[j] than
				W[i]++
		for j=i to N-1
			if i != j and S[i] == S[j] than 
				return "failure in encryption"
			W[i] = W[i] + S[j] - 'a'

		W[i] = W[i] mod 10

	The encrypted name of person is W[0],W[1]..,W[N-1]
</pre>

</pre>
Few sample outputs of encrypt function are as follows. ```

<pre>
encrypt("anupklby") = 48768961
encrypt("adurysk") = 2342822
</pre>

<pre>
After understanding the algorithm and the details of the encrypted names, he realized that he have made a big fool of himself, these people have been very smart and did not provide their original names. They tried to hide their identity as much as possible by having all the characters in their names different and padding them with unnecessary characters so as to make sure all of the names have length equal to **N**.

Now, Sebi wants to reveal the names of these public by decrypting the algorithm. He doesn't provide any guarantee that the provided name is the unique such possible name corresponding to the decryption of encrypted name, he just claims that at least this name's encryption comes out to be equal to given encrypted name. He wants to expose as many black many holders as possible and by setting a high standard for himself want to expose name corresponding to at least 3960 of the encrypted names.

### Input

The first line of the input contains an integer **T**, **N**. **T** is always 4000, **N** is always 8 except in the examples, **N** is the length of the names of the persons.

Each of the next **T** lines contains the encrypted name of a person.

### Output

Output **T** lines. A line can contain -1 if you are not able to find the corresponding name, or a **N** length string corresponding to the name containing different lowercase Latin letters.

### Constraints

- **T** = **4000**
- **N** = **8**

### Example 1

</pre><b>Input:</b>
1 1
2

<b>Output:</b>
w

<pre>### Example 2
</pre><b>Input:</b>
1 2
79

<b>Output:</b>
js

<pre>### Example 3
</pre><b>Input:</b>
1 8
48768961

<b>Output:</b>
anupklby

<pre>### Example 4
</pre><b>Input:</b>
1 7
2342822

<b>Output:</b>
adurysk

<pre>### Explanation
**Example case 3.** One possible black money holder for this encrypted name can be "anupklby".
