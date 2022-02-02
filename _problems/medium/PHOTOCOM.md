---
{"category_name":"medium","problem_code":"PHOTOCOM","problem_name":"Sasha and Photos","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"step_by_step","problem_tester":null,"date_added":"8-08-2018","tags":{"0":2,"1":2,"2":"geometry","3":"implementation","4":"sept18","5":"step_by_step"},"editorial_url":"https://discuss.codechef.com/problems/PHOTOCOM","time":{"view_start_date":1537176602,"submit_start_date":1537176602,"visible_start_date":1537176602,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Hindi](http://www.codechef.com/download/translated/SEPT18/hindi/PHOTOCOM.pdf) ,[Bengali](http://www.codechef.com/download/translated/SEPT18/bengali/PHOTOCOM.pdf) , [Mandarin chinese](http://www.codechef.com/download/translated/SEPT18/mandarin/PHOTOCOM.pdf) , [Russian](http://www.codechef.com/download/translated/SEPT18/russian/PHOTOCOM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SEPT18/vietnamese/PHOTOCOM.pdf) as well.


Sasha is a little girl who likes to view and compare photos. In this problem, a photo is a grid of pixels with $h$ rows and $w$ columns; each cell of this grid is either black or white. We will call the ordered pair of integers $(h, w)$ the *shape* of a photo.

Let's define the *similarity* of two photos $P$ and $R$ with **the same** shape $(h, w)$ as the number of pairs of indices $i, j$ ($1 \le i \le h$, $1 \le j \le w$) such that $P_{i, j} = R_{i, j}$.

Today, Sasha found two photos with possibly different shapes. She cannot directly compute the similarity of these photos; therefore, she decided to upscale both photos to get two photos with identical shapes. Formally, Sasha can choose two positive integers $a$ and $b$ and transform a photo with shape $(h, w)$ into a photo with shape $(ah, bw)$, where each pixel from the original photo is replaced by a rectangle of pixels with shape $(a, b)$ and the same color as that pixel. Since Sasha does not like huge photos, the upscaled photos should be as small as possible (specifically, if the original photos have the same shapes, they should not be changed at all).

Since the resulting photos may be very big, Sasha asks you to help her and compute their similarity.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $h_1$ and $w_1$ denoting the shape of the first photo.
- The second line contains a single string with length $h_1 \cdot w_1$ describing the first photo. For each valid $i, j$, the pixel in the $i$-th row and $j$-th column of the photo is white if the $(i-1)w_1+j$-th character of this string is '1' or black if this character is '0'.
- The third line contains two space-separated integers $h_2$ and $w_2$ denoting the shape of the second photo.
- The fourth line contains a single string describing the second photo in the same format as the first one.

### Output
For each test case, print a single line containing one integer — the similarity of the upscaled photos.

### Constraints
- $1 \le T \le 10$
- $1 \le h_1 \cdot w_1 \le 10^6$
- $1 \le h_2 \cdot w_2 \le 10^6$
- each string contains only characters '0' and '1'

### Subtasks
**Subtask #1 (10 points):**
- $1 \le T \le 20$
- $1 \le h_1, w_1, h_2, w_2 \le 30$

**Subtask #2 (40 points):** $1 \le h_1, w_1, h_2, w_2 \le 1,000$

**Subtask #3 (50 points):** original constraints

### Example Input
```
2
1 2
01
2 1
01
2 2
0111
3 3
000000001
```

### Example Output
```
2
13
```
	
### Explanation
**Example case 1:** The initial photos are
```
01
```
and
```
0
1
```
and the upscaled photos are
```
01
01
```
and
```
00
11
```
with similarity 2, since there are two pairs of equal pixels — pixels $(0, 0)$ and pixels $(1, 1)$.
	
**Example case 2:** The initial photos are
```
0 1
1 1
```
and
```
0 0 0
0 0 0
0 0 1
```
and the upscaled photos are
```
000111
000111
000111
111111
111111
111111
```
and
```
000000
000000
000000
000000
000011
000011
```
with similarity 13.
