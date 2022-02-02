---
{"category_name":"medium","problem_code":"ENGLISH","problem_name":"English","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n6\r\nabcdefghijkl\r\nchef\r\nworld\r\ncode\r\nabcxyzhijkl\r\nword\r\n4\r\nproblem\r\npoem\r\nproblem\r\nproblem\r\n3\r\ncontest\r\ncoolest\r\nunused","output":"10\r\n50\r\n4","explanation":"**Example case 1:** The best verse is ((\u0022abcdefghijkl\u0022, \u0022abcxyzhijkl\u0022), (\u0022world\u0022, \u0022word\u0022), (\u0022code\u0022, \u0022chef\u0022)), which was described above.\r\n\r\n**Example case 2:** The best verse is ((\u0022problem\u0022, \u0022problem\u0022), (\u0022problem\u0022, \u0022poem\u0022)). Its beauty is $7^2+1^2 = 49+1 = 50$. Note that we have three copies of the word \u0022problem\u0022, so we can use it three times.\r\n\r\n**Example case 3:** The best verse is ((\u0022coolest\u0022, \u0022contest\u0022)), which contains only one stanza. Its beauty is $2^2=4$. Note that it is not necessary to use all the words ? the word \u0022unused\u0022 is left unused.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"vladprog","problem_tester":null,"date_added":"4-12-2019","tags":{"0":"hashing","1":"jan20","2":"observation","3":"trie","4":"vijju123","5":"vladprog","6":"vladprog"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/ENGLISH","time":{"view_start_date":1578907800,"submit_start_date":1578907800,"visible_start_date":1578907800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ENGLISH","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JAN20/hindi/ENGLISH.pdf), [Bengali](https://www.codechef.com/download/translated/JAN20/bengali/ENGLISH.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JAN20/mandarin/ENGLISH.pdf), [Russian](https://www.codechef.com/download/translated/JAN20/russian/ENGLISH.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JAN20/vietnamese/ENGLISH.pdf) as well.

Chef is learning English. So far, he knows $N$ words, and he wants to write a verse.

Let's call a pair of English words a *stanza*. A *verse* is a list of stanzas. The *prefixal rhyme* of a stanza is the longest common prefix of the words in it. Similarly, the *suffixal rhyme* of a stanza is the longest common suffix of the words in it. The *beauty* of a stanza whose prefixal and suffixal rhymes have lengths $l_p$ and $l_s$ respectively is $\mathrm{min}(l_p, l_s)^2$.

For example, a stanza formed by the words "abcdefghijkl" and "abcxyzhijkl" has a prefixal rhyme "abc" (with length $3$), suffixal rhyme "hijkl" (with length $5$) and beauty $\mathrm{min}(3,5)^2 = 3^2 = 9$.

The beauty of a verse is the sum of beauties of all its stanzas. For example, the beauty of the verse (("abcdefghijkl", "abcxyzhijkl"), ("world", "word"), ("code", "chef")) is $9+1+0=10$.

You are given $N$ words $W_1, W_2, \ldots, W_N$ (they are not necessarily distinct). Help Chef write the most beautiful verse. It is not necessary to use all the words, but each word may be used at most once in the whole verse (more precisely, each element of the sequence $W$ may be used only once, but if some word appears $k$ times in $W$, we can use it up to $k$ times).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains a single string $W_i$.

### Output
For each test case, print a single line containing one integer ― the greatest possible beauty of Chef's verse.

### Constraints
- $1 \le T \le 10^5$
- $1 \le N \le 10^5$
- $1 \le |W_i| \le 10^5$ for each valid $i$
- all words contain only lowercase English letters
- the sum of $|W_1|+|W_2|+\ldots+|W_N|$ over all test cases does not exceed $10^5$

### Subtasks
**Subtask #1 (50 points):** all words are palindromes

**Subtask #2 (50 points):** original constraints

### Example Input
```
3
6
abcdefghijkl
chef
world
code
abcxyzhijkl
word
4
problem
poem
problem
problem
3
contest
coolest
unused
```

### Example Output
```
10
50
4
```

### Explanation
**Example case 1:** The best verse is (("abcdefghijkl", "abcxyzhijkl"), ("world", "word"), ("code", "chef")), which was described above.

**Example case 2:** The best verse is (("problem", "problem"), ("problem", "poem")). Its beauty is $7^2+1^2 = 49+1 = 50$. Note that we have three copies of the word "problem", so we can use it three times.

**Example case 3:** The best verse is (("coolest", "contest")), which contains only one stanza. Its beauty is $2^2=4$. Note that it is not necessary to use all the words ― the word "unused" is left unused.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>