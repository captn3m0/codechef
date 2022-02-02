---
{"category_name":"hard","problem_code":"SPS","problem_name":"Shortest Palindromic Superstring","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":null,"date_added":"10-10-2019","tags":{"0":"jtnydv25"},"problem_difficulty_level":"Hard","best_tag":"","editorial_url":"","time":{"view_start_date":1136053800,"submit_start_date":1136053800,"visible_start_date":1136053800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SPS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
A palindrome is a string that is identical to its reverse. For example, "aba", "abba", "a" and "aa" are palindromes, while "ab", "abb" and "xyz" are not.

A string $X$ is called a substring of string $Y$ if it is possible to obtain $X$ by erasing some (possibly zero) characters from the beginning of $Y$ and some (possibly zero) from the end of $Y$ without changing the order of the remaining characters. For example, "cp" is a substring of "icpc", while "icc" is not.

You are given two strings $s$ and $t$. Find the minimum length of a string (let's denote it by $w$) that satisfies the following conditions:
- $w$ is a palindrome
- $s$ and $t$ are substrings of $w$

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated strings $s$ and $t$.

### Output
For each test case, print a single line containing one integer - the minimum length of a palindrome that contains both $s$ and $t$ as substrings.

### Constraints 
- $1 \le T \le 1,000$
- $1 \le |s|, |t| \le 2,000$
- $s$ and $t$ contain only lowercase English letters
- the sum of the lengths of all the strings on the input does not exceed $4,000$

### Example Input
```
4
a a
a b
abc cb
abbc ba
```

### Example Output
```
1
3
5
7
```

### Explanation
**Example case 1:** $s$ and $t$ are both "a", and "a" is also the shortest palindrome that contains both $s$ and $t$.

**Example case 2:** One possible string $w$ is "aba", since there is no palindrome with length $1$ or $2$ that contains both "a" and "b".

**Example case 3:** One possible string $w$ is "abcba".

**Example case 4:** One possible string $w$ is "abbcbba".

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>