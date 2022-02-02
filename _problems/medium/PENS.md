---
{"category_name":"medium","problem_code":"PENS","problem_name":"Pen Pineapple Apple Pen","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":null,"date_added":"9-10-2019","tags":{"0":"jtnydv25"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"","time":{"view_start_date":1136053800,"submit_start_date":1136053800,"visible_start_date":1136053800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PENS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
There are $K$ magical pens (numbered $1$ through $K$). You are given strings $P_1, P_2, \ldots,  P_K$  (each of which consists of characters from **'a', 'b', ..., 't'**) ; for each valid $i$, the $i$-th pen can only write letters from the string $P_i$.

You want to write a word $S$ of length $N$. All the characters of $S$ are  between **'a'** and **'t'** inclusive. This string must be written from left to right. To write it, you pick up some pen and start writing; after you've written some prefix of $S$, you can put down that pen, pick up another pen, continue writing $S$ from the point where you put down the previous pen, later pick up another pen (any pen) and continue writing $S$ with that pen, and so on until you write the whole string $S$. You may pick up each pen any number of times, including zero.

You have to find a way of writing the word $S$ such that the number of times you change the pen (put down the pen you're currently writing with and pick up another) is the smallest possible. If there are multiple solutions, you may find any one. It is guaranteed that it is possible to write $S$ with the given pens.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains a single string $S$.
- For each valid $i$, the $i$-th of the next $K$ lines contains a single string $P_i$.

### Output
For each test case, print a single line containing $N$ space-separated integers. For each valid $i$, the $i$-th of these integers should be the number of the pen with which you want to write the $i$-th character of $S$.

Your output will be considered correct if each character can be written with the pen you want to write it with and the number of times you have to change the pen you are writing with is minimum possible.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 10^6$
- $1 \le K \le 10^5$
- $S, P_1, P_2, \ldots, P_K$ contain only characters **'a', 'b', ..., 't'**
- $1 \le |P_i| \le 20$ for each valid $i$
- For each valid $i$, all characters of $P_i$ are pairwise distinct
- The sum of lengths of all the strings on the input does not exceed $2 \cdot 10^6$

### Example Input
```
3
4 2
abcd
ab
cd
4 2
baab
ab
ca
4 2
acaa
ab
cd
```

### Example Output
```
1 1 2 2
1 1 1 1
1 2 1 1
```

### Explanation
**Example case 1:** You can write the first two characters with the first pen and the next two characters with the second pen. This means you have to change the pen once (from pen $1$ to pen $2$).

**Example case 2:** You can write the whole string $S$ with the first pen, so you never have to change the pen you are writing with.

**Example case 3:** You can write the first character with the first pen, the second character with the second pen and then the last two characters again with the first pen. Thus, you have to change the pen twice (from pen $1$ to pen $2$ and then from pen $2$ to pen $1$).

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>