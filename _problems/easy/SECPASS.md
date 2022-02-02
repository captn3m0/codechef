---
{"category_name":"easy","problem_code":"SECPASS","problem_name":"Chef and Secret Password","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"shivamgor498","problem_tester":null,"date_added":"14-02-2019","tags":{"0":"cook103","1":"easy","2":"shivamgor498"},"editorial_url":"https://discuss.codechef.com/problems/SECPASS","time":{"view_start_date":1550428202,"submit_start_date":1550428202,"visible_start_date":1550428202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/COOK103/hindi/SECPASS.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/COOK103/mandarin/SECPASS.pdf), [Russian](http://www.codechef.com/download/translated/COOK103/russian/SECPASS.pdf), [Vietnamese](http://www.codechef.com/download/translated/COOK103/vietnamese/SECPASS.pdf) and [Bengali](http://www.codechef.com/download/translated/COOK103/bengali/SECPASS.pdf) as well.

Chef wants to prepare a special dish. There is a special ingredient Chef needs for this dish, so he decided to search for it in all of Chefland. After some research, he discovered it in a secret cave. He may only enter the cave if he has a password; fortunately, a string $S$, which serves as a hint for this password, is written next to the cave.

Chef knows that the secret password is a non-empty prefix of the string $S$. Also, he knows that:
- if a prefix occurs in $S$ more often as a substring, then the probability that this prefix is the secret password is higher (the probability that a chosen prefix is the secret password is an increasing function of its number of occurrences in $S$)
- if two prefixes have the same number of occurrences in $S$, then the longer prefix has a higher probability of being the secret password

Chef wants to guess the secret password with the maximum possible probability of success. Help Chef and find the prefix for which this probability is maximum.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains a single string $S$ with length $N$.

### Output
For each test case, print a single line containing one string — the prefix with the highest probability of being the secret password.

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 100,000$
- $S$ contains only lowercase English letters

### Example Input
```
3
3
abc
5
thyth
5
abcbc
```

### Example Output
```
abc
th
abcbc
```

### Explanation
**Example case 1:** Each prefix occurs in $S$ the same number of times (once) and the prefix with maximum length is "abc", so the secret password is most likely "abc".
