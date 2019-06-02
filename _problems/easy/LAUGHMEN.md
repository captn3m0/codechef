---
category_name: easy
problem_code: LAUGHMEN
problem_name: 'A Few Laughing Men'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 24-12-2017
tags:
    - admin2
time:
    view_start_date: 1517693400
    submit_start_date: 1517693400
    visible_start_date: 1517693400
    end_date: 1735669800
    current: 1525454368
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Balaji is a great person to hang out with. He tells really *amazing* jokes, though sometimes he also slips some very *boring* ones in between. Today, he told **N** jokes to Arjun. We have this information in an array **J** of size **N** recorded and given to us by Vaibhav, where each entry can be either 1 or -1. 1 denotes that the joke was amazing, whereas -1 signifies the joke was boring and too poor to get even a forced smile from our nice Arjun.

Arjun being a sensible person, can distinguish amazing and boring jokes easily. He usually laughs only at amazing jokes. But today morning he had a session of laughter yoga, and he is very happy and elated. So, whenever he hears some amazing jokes, he laughs with strictly more intensity than the previous *amazing joke* that he heard. As usual, if you tell a boring joke, he won't care much about it and will respond arbitrarily. That is, you can't say anything about his laugh intensity. It could be anything.

Vaibhav was present during this laughing session. He recorded the events, but since he has not seen Arjun before, he is not sure if it was actually Arjun or someone else who was laughing. He has recorded the type of the **N** jokes in array **J**. Also, the laughter intensities were recorded in an array **L** of size **N** by an automated sophisticated equipment called the intensometer. The ith entry of this array denotes the intensity with which the person laughed at the ith joke. But we do not trust Vaibhav fully. Through our very trusted sources Animesh and Akashdeep, it came to light that Vaibhav might have slept for a short duration during the session. But we know that if at all he slept, he slept only for a short enough time and so he could only have miswritten the joke type of at most one joke. That is, he could have misclassified at most one amazing joke as a boring one, or vice-versa. As intensities are calculated using the intensometer, they have been recorded precisely and there are no errors in it.

So, given the array **J**, and the array **L**, we should identify whether the person laughing could have been Arjun or not. Note that Arjun could laugh at an amazing joke with intensity 0.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** cases follow.

The first line of each test case contains a single integer **N** denoting the number of jokes Balaji told.

The second line of each test case contains **N** space separated integers denoting the array **J**.

The third line of each test case contains **N** space separated integers denoting the array **L**.

### Output

For each test case, output a single line containing "#laughing\_arjun" or "#itsnot\_arjun". You should output "#itsnot\_arjun" if you are sure that the person whose laugh intensities have been recorded is not Arjun. But if it could be Arjun, you should output "#laughing\_arjun".

### Constraints

- 1 ≤ **T** ≤ 105
- 1 ≤ **N** ≤ 105
- **Ji** = 1 or -1
- 0 ≤ **Li** ≤ 109
- There will be no two jokes with the same intensity.
- Sum of **N** over all the test cases in a single file ≤ 106.

### Example

<pre>
<b>Input</b>
4
4
1 1 -1 1
1 3 2 4
4
1 1 -1 1
3 1 2 4
4
1 1 -1 1
4 3 2 1
4
-1 -1 -1 -1
4 3 2 1

<b>Output</b>
#laughing_arjun
#laughing_arjun
#itsnot_arjun
#laughing_arjun
</pre>
### Explanation

**Example case 1.** Only the third joke was boring. All other jokes were amazing. The person laughed in increasing intensity over the good jokes (1 3 4), so he could be Arjun.

**Example case 2.** Similar to the previous testcase, the third joke was boring. All other jokes were amazing. But the person didn't laugh in increasing intensity over the amazing jokes (3 1 4). However, Vaibhav might have been sleeping and he could have misrecorded the first joke as an amazing joke. In that case, the laughing intensities over the amazing jokes will be 1 4, which is in increasing order. So, this person could be Arjun.

**Example case 3.** The third joke was boring again. The person didn't laugh in increasing intensity over the amazing jokes (4 3 1). Even if Vaibhav was sleeping, the recorded intensities over the amazing jokes could only be (3, 1), (4, 1), or (4, 3). None of these are increasing, and so this person is definitely not Arjun.

**Example case 4.** All the jokes were boring. Arjun could have laughed in any intensity order. So this can be Arjun.
