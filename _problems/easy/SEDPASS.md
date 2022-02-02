---
{"category_name":"easy","problem_code":"SEDPASS","problem_name":"Sed Passwords","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5\r\naa?\r\na???\r\n????\r\nasfhaslskfak\r\naf??avvnfed?fav?faf????","output":"2\r\n6\r\n4\r\n2\r\n27","explanation":"**Example case 1:** All letters occur an even number of times in $S$. The six substrings of $S$ are \u0022a\u0022, \u0022a\u0022, \u0022?\u0022, \u0022aa\u0022, \u0022a?\u0022 and \u0022aa?\u0022 (note that \u0022a\u0022 is counted twice). Which of them are good?\r\n- \u0022a\u0022 is not good as \u0027a\u0027 occurs an odd number of times in this substring and there are no \u0027?\u0027 to replace.\r\n- \u0022?\u0022 is also not good as replacing \u0027?\u0027 by any letter causes this letter to occur in $R$ an odd number of times.\r\n- \u0022aa\u0022 is a good substring because each letter occurs in it an even number of times and there are no \u0027?\u0027 to replace.\r\n- \u0022a?\u0022 is also a good substring. We can replace \u0027?\u0027 with \u0027a\u0027. Then, $R$ is \u0022aa\u0022 and each letter occurs in this string an even number of times. Note that replacing \u0027?\u0027 e.g. with \u0027b\u0027 would not work ($R$ would be \u0022ab\u0022, where both \u0027a\u0027 and \u0027b\u0027 occur an odd number of times), but we may choose the replacement letter $C$ appropriately.\r\n- \u0022aa?\u0022 is not a good substring. For any replacement letter $C$, we find that $C$ occurs an odd number of times in $R$.\r\n\r\n**Example case 2:** We especially note that \u0022a???\u0022 is not a good substring. Since all \u0027?\u0027 have to be replaced by the same character, we can only get strings of the form \u0022aaaa\u0022, \u0022abbb\u0022, \u0022accc\u0022, etc., but none of them match the criteria for a good substring.\r\n\r\n**Example case 3:** Any substring with even length is good.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/lBfVwB9Lu5s","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"bhvdsi","problem_tester":"","date_added":"12-12-2020","tags":{"0":"bhvdsi","1":"bitmasking","2":"cook125","3":"easy","4":"rajarshi_basu","5":"strings"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SEDPASS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SEDPASS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK125/hindi/SEDPASS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK125/mandarin/SEDPASS.pdf), [Russian](https://www.codechef.com/download/translated/COOK125/russian/SEDPASS.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK125/vietnamese/SEDPASS.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK125/bengali/SEDPASS.pdf) as well.

The notorious hacker group "Sed" managed to obtain a string $S$ from their secret sources. The string contains only lowercase English letters along with the character '?'.

A substring of $S$ is a contiguous subsequence of that string. For example, the string "chef" is a substring of the string "codechef", but the string "codeh" is not a substring of "codechef".

A substring of $S$ is *good* if it is possible to choose a lowercase English letter $C$ such that the following process succeeds:
- Create a string $R$, which is a copy of the substring, but with each '?' replaced by the letter $c$. Note that all occurrences of '?' must be replaced by the same letter.
- For each lowercase English letter:
    - Compute the number of times it occurs in $S$ and the number of times it occurs in $R$; let's denote them by $A$ and $B$ respectively. The '?' characters in the original string $S$ are ignored when computing $A$.
    - Check the parity of $A$ and $B$. If they do not have the same parity, i.e. one of them is even while the other is odd, then this process fails.
- If the parities of the number of occurrences in $S$ and $R$ are the same for each letter, the process succeeds.

For different substrings, we may choose different values of $C$.

Help Sed find the number of good substrings in the string $S$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single string $S$.

### Output
For each test case, print a single line containing one integer ― the number of good substrings.

### Constraints
- $1 \le T \le 10^5$
- $1 \le S \le 10^5$
- $S$ contains only lowercase English letters ('a' through 'z') and '?'
- the sum of $|S|$ over all test cases does not exceed $10^5$

### Example Input
```
5
aa?
a???
????
asfhaslskfak
af??avvnfed?fav?faf????
```

### Example Output
```
2
6
4
2
27
```

### Explanation
**Example case 1:** All letters occur an even number of times in $S$. The six substrings of $S$ are "a", "a", "?", "aa", "a?" and "aa?" (note that "a" is counted twice). Which of them are good?
- "a" is not good as 'a' occurs an odd number of times in this substring and there are no '?' to replace.
- "?" is also not good as replacing '?' by any letter causes this letter to occur in $R$ an odd number of times.
- "aa" is a good substring because each letter occurs in it an even number of times and there are no '?' to replace.
- "a?" is also a good substring. We can replace '?' with 'a'. Then, $R$ is "aa" and each letter occurs in this string an even number of times. Note that replacing '?' e.g. with 'b' would not work ($R$ would be "ab", where both 'a' and 'b' occur an odd number of times), but we may choose the replacement letter $C$ appropriately.
- "aa?" is not a good substring. For any replacement letter $C$, we find that $C$ occurs an odd number of times in $R$.

**Example case 2:** We especially note that "a???" is not a good substring. Since all '?' have to be replaced by the same character, we can only get strings of the form "aaaa", "abbb", "accc", etc., but none of them match the criteria for a good substring.

**Example case 3:** Any substring with even length is good.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>