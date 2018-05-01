---
category_name: hard
problem_code: LONGART
problem_name: 'Longest Article'
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
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2.5'
source_sizelimit: '50000'
problem_author: 'iscsi '
problem_tester: anton_lunyov
date_added: 30-11-2012
tags:
    - bipartite
    - graph
    - hard
    - iscsi
    - march13
    - maximum
time:
    view_start_date: 1363000137
    submit_start_date: 1363000137
    visible_start_date: 1363000099
    end_date: 1735669800
    current: 1493556759
layout: problem
---
All submissions for this problem are available.In Chefland every **word** contains exactly two letters. There exist two alphabets **A** of size **N** and **B** of size **M**, where the first letter of every word comes from **A**, and the second letter of every word comes from **B**.

Every **sentence** is a space-separated list of words such that each letter from **A** is used exactly once in some word of the sentence and each letter from **B** is used at most once. In particular, each sentence contains exactly **N** words.

An **article** contains exactly one sentence per line. Chef would like to avoid excessive word repetition, so he provides an upper bound for each word, specifying the number of times you can use that word in the article. Chef has no time so he asks you to write the longest possible article under the given constraints.

### Input

The first line of the input contains an integer **T**, denoting the number of test cases. The description of **T** test cases follows. The first line of each test contains an integer **N** and a string **A** of length **N**, denoting the first alphabet. **N** and **A** are separated by exactly one space. The next line contains an integer **M** and a string **B** of length **M**, denoting the second alphabet. **M** and **B** are separated by exactly one space. Then **N \* M** lines follow. Each of these lines contains two-character string **W** and an integer **C(W)**, denoting the word and the upper bound on the number of times this word can be used in the article. They are separated by exactly one space.

### Output

For each test case, output on a separate line an integer **K** denoting the number of sentences in the longest possible article, followed by the longest article in compressed format on consecutive lines. The first line of the compressed article should contain an integer **L**, denoting the number of blocks in the article. Each of following **L** lines should contain an integer **R** and a sentence **S** separated by a space. It means that in the actual article, **R** sentences equal to **S** follows. If **every** longest possible article requires more than **30000** blocks in its compressed form, output **-1** instead of the compressed article. If there are several longest articles possible you can output any of them.

### Constraints

- **1** ≤ **T** ≤ **2**
- **1** ≤ **N, M** ≤ **94**
- 0 ≤ **C(W)** ≤ **10000000** (**107**)
- All characters in **A** are different and **A** contains exactly **N** characters
- All characters in **B** are different and **B** contains exactly **M** characters
- Each character in **A** and **B** has ASCII code from 33 to 126, inclusive.
- The first character of **W** is from **A** and the second one is from **B**
- All **N \* M** words in the input for the particular test case are different

### Example

<pre>
<b>Input:</b>
2
2 Hi
3 esn
is 1
Hs 1
Hn 2
ie 2
in 1
He 2
1 +
1 +
++ 0

<b>Output:</b>
4
3
1 He is
1 in He 
2 Hn ie
0
0
</pre>### Explanation

**Example case 1.** The complete article is
He is
in He
Hn ie
Hn ie
Note that we use each word maximum number of times except **Hs** which was not used at all./>/>/>/>/>

**Example case 2.** We have only 1 word **++** for the given alphabets **A** and **B** but Chef does not allow to use it. So the only possible article here is an empty article.
