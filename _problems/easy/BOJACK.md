---
{"category_name":"easy","problem_code":"BOJACK","problem_name":"What Is This, a Crossover Episode","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sjshohag","problem_tester":"","date_added":"8-07-2020","tags":{"0":"constructive","1":"cook120","2":"easy","3":"rajarshi_basu","4":"sjshohag"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/BOJACK","time":{"view_start_date":1595183402,"submit_start_date":1595183402,"visible_start_date":1595183402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BOJACK","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK120/hindi/BOJACK.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK120/mandarin/BOJACK.pdf), [Russian](https://www.codechef.com/download/translated/COOK120/russian/BOJACK.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK120/vietnamese/BOJACK.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK120/bengali/BOJACK.pdf) as well.

You are given an integer $D$. You have to find a string $S$ such that the following conditions are satisfied:
- $S$ is non-empty and its length does not exceed $7 \cdot D$.
- $S$ contains only lowercase English letters.
- The number of distinct substrings in $S$ minus the number of palindromic substrings in $S$ equals $D$. Here, when counting palindromic substrings, a substring that occurs multiple times should be counted multiple times.

It can be proved that a solution always exists under the given constraints.

Notes:
- A string $B$ is a substring of a string $A$ if $B$ can be obtained from $A$ by deleting several (possibly none or all) characters from the beginning and several (possibly none or all) characters from the end.
- A palindrome is a string that does not change when it is reversed. E.g. strings "z", "aba" and "dammitimmad" are palindromes, but strings "ab" and "bojack" are not. 
- A palindromic substring is a substring which is also a palindrome.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $D$.

### Output
For each test case, print two lines. The first of these lines should contain a single integer ― the length of your string $S$. The second line should contain this string $S$.

If there are multiple solutions, you may find any one of them.

### Constraints
- $1 \le T \le 100$
- $1 \le D \le 10^4$
- the sum of $D$ over all test cases does not exceed $10^5$

### Example Input
```
4
4
10
15
60
```

### Example Output
```
4
todd
5
diane
6
bojack
12
peanutbutter
```

### Exaplanation
**Example case $1$:** There are $9$ distinct substrings in $S$: "t", "o", "d", "to", "od", "dd", "tod", "odd", "todd". Five of them are palindromic: "t", "o", "d", "d", "dd". Therefore, $D = 9 - 5 = 4$.

Notice that while counting palindromic substrings (but not while counting distinct substrings), we are including both occurrences of the substring "d".

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>